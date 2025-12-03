import './bootstrap';

window.appData = function () {
    return {
        page: 'home',
        darkMode: false,
        stickyMenu: false,
        navigationOpen: false,
        scrollTop: false,

        items: JSON.parse(localStorage.getItem('cart_items') || '{}'),
        count: 0,

        init() {
            // Restaurar modo oscuro
            const saved = localStorage.getItem('darkMode');
            this.darkMode = saved ? JSON.parse(saved) : false;

            // Contador de carrito
            this.updateCount();

            if (!window.__ADD_TO_CART_LISTENER__) {
                window.__ADD_TO_CART_LISTENER__ = true;

                window.addEventListener('add-to-cart', (event) => {
                    const item = event.detail;

                    console.log("📦 add-to-cart recibido:", item);

                    // Usa los nombres correctos
                    this.addToCart(
                        item.id,
                        item.quantity,
                        item.start_date,
                        item.end_date,
                        item.name,
                        item.price,
                        item.image
                    );
                });
            }
        },

        toggleDark() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('darkMode', JSON.stringify(this.darkMode));
        },

        addToCart(id, quantity, startDate, endDate, name, price, image) {
            quantity = parseInt(quantity);

            // Calcular días
            let days = 1;
            if (startDate && endDate) {
                const d1 = new Date(startDate);
                const d2 = new Date(endDate);
                days = Math.max(1, (d2 - d1) / (1000 * 60 * 60 * 24));
            }

            const total_price = (quantity * price * days).toFixed(2);

            // Si el producto no está en carrito
            if (!this.items[id]) {
                this.items[id] = {
                    id, name, image,
                    quantity, price,
                    date_debut: startDate,
                    date_fin: endDate,
                    days,
                    total_price
                };

            } else {
                // Si ya existe, sumar cantidad
                this.items[id].quantity += quantity;

                if (startDate) this.items[id].date_debut = startDate;
                if (endDate) this.items[id].date_fin = endDate;

                const d1 = new Date(this.items[id].date_debut);
                const d2 = new Date(this.items[id].date_fin);
                this.items[id].days = Math.max(1, (d2 - d1) / (1000 * 60 * 60 * 24));

                this.items[id].total_price =
                    (this.items[id].quantity * this.items[id].price * this.items[id].days).toFixed(2);
            }

            // Guardar
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
    };
};
