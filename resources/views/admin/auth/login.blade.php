
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Bus Booking</title>
<link rel="icon" type="image/png" href="{{ asset('images/favicon.jpg') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<div class="login-wrapper">

    <div class="login-visual">
        <div class="brand">
            <div class="brand-icon">
                <i class="fas fa-bus"></i>
            </div>
            <span>Bus<span class="brand-highlight">Booking</span></span>
        </div>

        <div class="visual-content">
            <span class="eyebrow">ADMINISTRATION PORTAL</span>

            <h1>Manage your journey to success.</h1>

            <p>
                Manage buses, routes, trips and bookings
                from one convenient dashboard.
            </p>

            <div class="feature-list">
                <div>
                    <i class="fas fa-check-circle"></i>
                    <span>Manage your bus fleet</span>
                </div>
                <div>
                    <i class="fas fa-check-circle"></i>
                    <span>Monitor bookings and trips</span>
                </div>
                <div>
                    <i class="fas fa-check-circle"></i>
                    <span>Keep everything organized</span>
                </div>
            </div>
        </div>

        <div class="visual-footer">
            &copy; {{ date('Y') }} BusBooking. All rights reserved.
        </div>
    </div>

    <div class="login-form-section">
        <div class="login-form-container">

            <div class="mobile-brand">
                <i class="fas fa-bus"></i>
                Bus<span>Booking</span>
            </div>

            <div class="form-heading">
                <span class="welcome-label">WELCOME BACK</span>
                <h2>Admin Login</h2>
                <p>Enter your credentials to access your account.</p>
            </div>

            @if ($errors->any())
                <div class="alert-error">
                    <i class="fas fa-circle-exclamation"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('status'))
                <div class="alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>

                    <div class="input-wrapper">
                        <i class="far fa-envelope input-icon"></i>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="admin@example.com"
                            autocomplete="username"
                            required
                            autofocus
                        >
                    </div>

                    @error('email')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <button
                            type="button"
                            class="password-toggle"
                            id="togglePassword"
                            aria-label="Show password"
                        >
                            <i class="far fa-eye"></i>
                        </button>
                    </div>

                    @error('password')
                        <small class="field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-options">
                    <label class="remember-option">
                        <input type="checkbox" name="remember" value="1">
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="login-button">
                    Sign In
                    <i class="fas fa-arrow-right"></i>
                </button>

            </form>

            <div class="security-note">
                <i class="fas fa-shield-halved"></i>
                Secure access for authorized administrators only.
            </div>

            <a href="{{ url('/') }}" class="back-home">
                <i class="fas fa-arrow-left"></i>
                Back to website
            </a>

        </div>
    </div>

</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const isPassword = passwordInput.type === 'password';

        passwordInput.type = isPassword ? 'text' : 'password';

        this.innerHTML = isPassword
            ? '<i class="far fa-eye-slash"></i>'
            : '<i class="far fa-eye"></i>';

        this.setAttribute(
            'aria-label',
            isPassword ? 'Hide password' : 'Show password'
        );
    });
</script>

</body>
</html>
