<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Ditangguhkan - EduNusa</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #333333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            padding: 40px 0;
            text-align: center;
        }
        .logo {
            display: inline-flex;
            align-items: center;
            font-size: 22px;
            font-weight: 800;
            color: #000;
            text-decoration: none;
            letter-spacing: -0.03em;
        }
        .logo i {
            color: #0d6efd;
            margin-right: 8px;
            font-size: 24px;
        }

        /* Main Content */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 20px;
        }

        h1 {
            font-size: 42px;
            font-weight: 800;
            color: #2b3035;
            margin: 0 0 16px;
            text-align: center;
            letter-spacing: -0.02em;
        }

        p.subtitle {
            font-size: 16px;
            color: #6c757d;
            text-align: center;
            max-width: 500px;
            margin: 0 0 80px;
            line-height: 1.6;
        }

        /* Plug Illustration */
        .illustration-container {
            width: 100%;
            max-width: 800px;
            height: 120px;
            position: relative;
            margin-bottom: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Left Plug (Blue) */
        .plug-left {
            position: absolute;
            right: 52%;
            display: flex;
            align-items: center;
            animation: float-left 3s ease-in-out infinite alternate;
        }
        .wire-left {
            width: 250px;
            height: 12px;
            background: #bbf7d0; /* Light green, adapting to color scheme */
            background: linear-gradient(90deg, transparent 0%, #93c5fd 100%);
            border-radius: 6px 0 0 6px;
        }
        .plug-body-left {
            width: 60px;
            height: 40px;
            background: #3b82f6;
            border-radius: 4px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        .plug-prongs {
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: absolute;
            right: -16px;
        }
        .prong {
            width: 16px;
            height: 6px;
            background: #2563eb;
            border-radius: 0 3px 3px 0;
        }

        /* Right Socket (Green) */
        .plug-right {
            position: absolute;
            left: 52%;
            display: flex;
            align-items: center;
            animation: float-right 3s ease-in-out infinite alternate;
        }
        .plug-body-right {
            width: 60px;
            height: 56px;
            background: #10b981;
            border-radius: 6px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 8px;
            padding-left: 4px;
        }
        .socket-hole {
            width: 14px;
            height: 10px;
            background: #047857;
            border-radius: 2px;
        }
        .wire-right {
            width: 250px;
            height: 12px;
            background: linear-gradient(270deg, transparent 0%, #6ee7b7 100%);
            border-radius: 0 6px 6px 0;
        }

        @keyframes float-left {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(-10px) translateY(-2px); }
        }
        @keyframes float-right {
            0% { transform: translateX(0) translateY(0); }
            100% { transform: translateX(10px) translateY(2px); }
        }

        /* Footer */
        footer {
            border-top: 1px solid #e9ecef;
            padding: 30px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #6c757d;
            font-size: 14px;
        }
        .footer-left span {
            margin-right: 20px;
        }
        .footer-left a {
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
        }
        .footer-left a:hover {
            color: #2b3035;
        }
        .social-icons {
            display: flex;
            gap: 12px;
        }
        .social-icons a {
            width: 32px;
            height: 32px;
            border: 1px solid #dee2e6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            text-decoration: none;
            transition: all 0.2s;
        }
        .social-icons a:hover {
            border-color: #6c757d;
            color: #6c757d;
        }

        @media (max-width: 768px) {
            h1 { font-size: 32px; }
            .wire-left, .wire-right { width: 100px; }
            footer { flex-direction: column; gap: 20px; text-align: center; }
            .footer-left span { display: block; margin: 5px 0; }
        }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo">
            <i class="fas fa-graduation-cap"></i> EduNusa
        </a>
    </header>

    <main>
        <h1>Sistem sedang ditangguhkan<br>untuk pemeliharaan</h1>
        <p class="subtitle">
            Kami memohon maaf atas ketidaknyamanan ini.<br>
            Tim kami sedang melakukan perbaikan dan sistem akan segera kembali.
        </p>

        <div class="illustration-container">
            <!-- Left Plug -->
            <div class="plug-left">
                <div class="wire-left"></div>
                <div class="plug-body-left">
                    <div class="plug-prongs">
                        <div class="prong"></div>
                        <div class="prong"></div>
                    </div>
                </div>
            </div>
            
            <!-- Right Socket -->
            <div class="plug-right">
                <div class="plug-body-right">
                    <div class="socket-hole"></div>
                    <div class="socket-hole"></div>
                </div>
                <div class="wire-right"></div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-left">
            <span>You can contact us:</span>
            <span>Phone: +62 812-3456-7890</span>
            <span>Email: <a href="mailto:support@edunusa.edu.id">support@edunusa.edu.id</a></span>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-telegram-plane"></i></a>
        </div>
    </footer>

</body>
</html>
