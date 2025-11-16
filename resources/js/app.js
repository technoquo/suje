import './bootstrap';


window.cart = function () {
    return {

        items: JSON.parse(localStorage.getItem('cart_items') || '{}'),
        count: 0,

        init() {
            this.updateCount();
        },

        addToCart(id, quantity, startDate, endDate, name, price, image) {

            quantity = parseInt(quantity);

            // Calcular días
            let days = 1;
            if (startDate && endDate) {
                const d1 = new Date(startDate);
                const d2 = new Date(endDate);
                days = Math.max(1, (d2 - d1) / (1000 * 60 * 60 * 24)); // mínimo 1 día
            }

            // Calcular total
            const total_price = (quantity * price * days).toFixed(2);

            // Si NO existe, lo agregamos
            if (!this.items[id]) {
                this.items[id] = {
                    id: id,
                    name: name,
                    image: image,
                    quantity: quantity,
                    price: price,
                    date_debut: startDate,
                    date_fin: endDate,
                    days: days,
                    total_price: total_price
                };
            } else {
                // Si YA existe, actualizamos cantidad y fechas
                this.items[id].quantity += quantity;

                if (startDate) this.items[id].date_debut = startDate;
                if (endDate) this.items[id].date_fin = endDate;

                // Recalcular días y total
                const d1 = new Date(this.items[id].date_debut);
                const d2 = new Date(this.items[id].date_fin);
                this.items[id].days = Math.max(1, (d2 - d1) / (1000 * 60 * 60 * 24));

                this.items[id].total_price =
                    (this.items[id].quantity * this.items[id].price * this.items[id].days).toFixed(2);
            }

            this.save();
            this.updateCount();
        },

        updateCount() {
            this.count = Object.keys(this.items).length;
        },

        totalGeneral() {
            return Object.values(this.items)
                .reduce((sum, item) => sum + parseFloat(item.total_price), 0)
                .toFixed(2);
        },

        save() {
            localStorage.setItem('cart_items', JSON.stringify(this.items));
        }
    }
}
