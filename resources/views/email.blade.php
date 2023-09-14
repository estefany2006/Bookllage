<x-layout>

    <style>

/* Reset some default styling */
body, h1, h2, h3, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 60px;
    width: 400px;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-top: 10px;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

button:hover {
    background-color: #45a049;
}

button:focus,
button:active {
    outline: none;
    transform: translateY(1px);
}

/* Additional styling for font awesome icon */
button i.fas {
    margin-right: 5px;
}

/* Responsive adjustments */
@media (max-width: 500px) {
    .container {
        width: 90%;
        padding: 40px;
    }
}

    </style>

    <form>
        <div class="container">
            <h2>Contact</h2>
            <form id="contactForm">
                <label for="nombre">Name:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="correo">Email:</label>
                <input type="email" id="correo" name="correo" required><br><br>

                <label for="mensaje">Message:</label><br>
                <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>




                <button type="button" id="btnContactar">Contact</button>
        </div>
    </form>

    <script>
        document.getElementById("btnContactar").addEventListener("click", function() {
            var nombre = document.getElementById("nombre").value;
            var correo = document.getElementById("correo").value;
            var mensaje = document.getElementById("mensaje").value;

            var asunto = "Mensaje de " + nombre;
            var para = correo;
            var cuerpo = mensaje;

            var mailtoLink = "mailto:()" +
                "?subject=" + encodeURIComponent(asunto) +
                "&body=" + encodeURIComponent(cuerpo);

            window.location.href = mailtoLink;
        });
    </script>

    </div>
</x-layout>
