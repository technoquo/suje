@extends('layouts.frontend')
@section('content')
<div class="bg-base-200 rounded-lg shadow-lg p-8 mt-6">
    <h1 class="text-3xl font-bold text-center mb-6">Contactez-nous</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Contact Information -->
        <div class="space-y-4">
            <p class="text-lg">
                <i class="fas fa-envelope text-primary"></i>
                Email:
                <a href="mailto:info.suje@gmail.com" class="text-primary hover:underline">info.suje@gmail.com</a>
            </p>
            <p class="text-lg">
                <i class="fas fa-map-marker-alt text-primary"></i>
                Adresse : Rue Louis Hap 16, 1040 Etterbeek
            </p>
            <p class="text-lg">
                <i class="fas fa-map-marker-alt text-primary"></i>
                Liens directs:
            </p>
            <div class="text-lg">
                <i class="fas fa-clock text-primary"></i>
                <p>Heures de bureau:</p>
                <ul class="list-disc list-inside">
                    <li>Lundi - Vendredi : 08:00 - 17:00</li>
                </ul>
            </div>
            <p class="text-lg flex items-center">
                <!-- WhatsApp SVG Icon -->
                <svg class="w-6 h-6 text-green-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                  </svg>

                <a href="https://wa.me/3221234567?text=Bonjour%2C%20je%20souhaite%20plus%20d%27informations." class="text-primary hover:underline">Chattez avec nous sur WhatsApp</a>
            </p>
        </div>
        <!-- Office Image and Map -->
        <div class="space-y-4">
            <!-- Office Image -->
            <img src="https://tse4.mm.bing.net/th?id=OIP.JP4qXOUs1DQb1Sm634K7bgHaJC&w=474&h=474&c=7" alt="Image de notre bureau à Rue Louis Hap 16" class="w-full h-64 object-cover rounded-lg shadow">
            <!-- Embedded Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.646123456789!2d4.383123456789!3d50.836123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38012345678%3A0x123456789abcdef!2sRue%20Louis%20Hap%2016%2C%201040%20Etterbeek%2C%20Belgique!5e0!3m2!1sfr!2sbe!4v1697026848243!5m2!1sfr!2sbe"
                class="w-full h-64 rounded-lg shadow"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>

@endsection
