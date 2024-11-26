<x-web-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Trendy Threads</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <style>
        body {
            background-color: #343a40;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        h1 {
            font-weight: 600;
            margin-bottom: 1rem;
            animation: fadeIn 2s ease-in-out;
        }
        .form-control:focus {
            border-color: #6c757d;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 50px;
            background-color: #222;
            padding-top: 30px;
        }
        footer a {
            text-decoration: none;
            color: #ffffff;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #007bff;
        }
        .social-icons {
            margin-top: 15px;
        }
        .social-icons i {
            font-size: 24px;
            margin: 0 10px;
            cursor: pointer;
            transition: color 0.3s;
        }
        .social-icons i:hover {
            color: #007bff;
        }
        #successMessage {
            transition: opacity 0.5s ease;
            opacity: 0;
        }
        #successMessage.show {
            opacity: 1;
        }
        .cta-section {
            background-color: #222;
            padding: 40px;
            margin-top: 50px;
            text-align: center;
        }
        .cta-section h2 {
            color: #fff;
            font-size: 2rem;
        }
        .cta-section p {
            color: #ccc;
        }
        .cta-button {
            background-color: #007bff;
            color: white;
            font-size: 1.2rem;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
   

    <!-- Contact Form -->
    <div class="container my-5">
        <h1 class="text-center">Contact Us</h1>
        <p class="text-center mb-4">Have questions or feedback? We'd love to hear from you!</p>
        <form id="contactForm" class="shadow-lg p-4 bg-dark rounded">
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>

        <!-- Success Message -->
        <div id="successMessage" class="alert alert-success mt-4 d-none" role="alert">
            Thank you! Your message has been sent successfully.
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section">
        <h2>Have a Question?</h2>
        <p>We're here to help! Whether you have inquiries about our products or services, feel free to reach out to us.</p>
        <button class="cta-button" onclick="window.location.href='contact.html'">Contact Us Now</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Form submission script
        const form = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent actual form submission
            successMessage.classList.remove('d-none');
            successMessage.classList.add('show'); // Add the 'show' class to fade in the message
            form.reset(); // Reset form fields
        });
    </script>
</body>
</html>

</x-web-layout>