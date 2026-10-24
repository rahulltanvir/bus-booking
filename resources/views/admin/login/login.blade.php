
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | BusBooking</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('bus-logo.jpeg') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<div class="login-page">

    <!-- LEFT: BRAND PANEL -->
    <section class="brand-panel">

        <div class="brand-top">
            <div class="brand-logo">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <rect x="4" y="3" width="16" height="18" rx="4"
                          stroke="currentColor" stroke-width="1.8"/>
                    <path d="M7.5 7.5h9v6h-9z"
                          stroke="currentColor" stroke-width="1.8"/>
                    <path d="M8 17h.01M16 17h.01M7 21v-2M17 21v-2"
                          stroke="currentColor" stroke-width="2.5"
                          stroke-linecap="round"/>
                </svg>
            </div>

            <div class="brand-name">
                <strong>BusBooking</strong>
                <span>ADMINISTRATION</span>
            </div>
        </div>

        <div class="brand-content">
            <div class="eyebrow">
                <span class="status-dot"></span>
                MANAGEMENT PORTAL
            </div>

            <h1>Every journey.<br>Under <span>control.</span></h1>

            <p class="brand-description">
                Manage routes, buses, schedules and bookings
                from one simple, powerful dashboard.
            </p>

            <div class="journey-visual">
                <div class="visual-glow"></div>

                <div class="orbit orbit-one"></div>
                <div class="orbit orbit-two"></div>

                <div class="city city-one">
                    <span></span><span></span><span></span>
                </div>

                <div class="city city-two">
                    <span></span><span></span><span></span><span></span>
                </div>

                <div class="route-line">
                    <span class="route-point point-start"></span>
                    <span class="route-point point-end"></span>
                </div>

                <div class="bus-illustration">
                    <svg viewBox="0 0 180 90" fill="none" aria-label="Bus illustration">
                        <path d="M25 19C25 12 31 8 39 8H139C148 8 154 13 154 22V65H25V19Z"
                              fill="#F8FAFC"/>
                        <path d="M35 18H140C145 18 148 22 148 28V43H35V18Z"
                              fill="#B9E8F5"/>
                        <path d="M88 19V43M117 19V43"
                              stroke="#0F2941" stroke-width="3"/>
                        <path d="M25 46H154V62H25V46Z" fill="#10B981"/>
                        <path d="M32 51H147" stroke="#D1FAE5" stroke-width="2"
                              stroke-linecap="round"/>
                        <rect x="39" y="54" width="20" height="5" rx="2.5"
                              fill="#064E3B"/>
                        <rect x="66" y="54" width="20" height="5" rx="2.5"
                              fill="#064E3B"/>
                        <path d="M25 64H154V70H25V64Z" fill="#D9E2EC"/>
                        <circle cx="48" cy="69" r="10" fill="#10253D"/>
                        <circle cx="48" cy="69" r="4" fill="#A7B6C8"/>
                        <circle cx="132" cy="69" r="10" fill="#10253D"/>
                        <circle cx="132" cy="69" r="4" fill="#A7B6C8"/>
                        <path d="M154 48H160V58H154" fill="#FCD34D"/>
                    </svg>
                </div>

                <div class="floating-tag tag-top">
                    <span class="tag-icon">↗</span>
                    <span><strong>Smart operations</strong><small>One control center</small></span>
                </div>

                <div class="floating-tag tag-bottom">
                    <span class="tag-check">✓</span>
                    <span><strong>Your journey starts here</strong><small>Reliable. Organized. Simple.</small></span>
                </div>

                <div class="road"></div>
            </div>
        </div>

        <div class="brand-footer">
            <span>BUILT FOR BETTER JOURNEYS</span>
            <span class="footer-line"></span>
            <span>ADMIN PORTAL</span>
        </div>

    </section>

    <!-- RIGHT: LOGIN FORM -->
    <main class="form-panel">

        <div class="mobile-brand">
            <div class="brand-logo">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <rect x="4" y="3" width="16" height="18" rx="4"
                          stroke="currentColor" stroke-width="1.8"/>
                    <path d="M7.5 7.5h9v6h-9z"
                          stroke="currentColor" stroke-width="1.8"/>
                    <path d="M8 17h.01M16 17h.01"
                          stroke="currentColor" stroke-width="2.5"
                          stroke-linecap="round"/>
                </svg>
            </div>
            <strong>BusBooking</strong>
        </div>

        <div class="form-wrapper">

            <div class="secure-label">
                <span class="lock-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="5" y="10" width="14" height="11" rx="2"
                              stroke="currentColor" stroke-width="1.7"/>
                        <path d="M8 10V7a4 4 0 0 1 8 0v3"
                              stroke="currentColor" stroke-width="1.7"
                              stroke-linecap="round"/>
                        <circle cx="12" cy="15" r="1.3" fill="currentColor"/>
                    </svg>
                </span>
                SECURE ADMIN ACCESS
            </div>

            <h2>Welcome back<span class="heading-dot">.</span></h2>

            <p class="form-subtitle">
                login to access your administration dashboard.
            </p>

            @if ($errors->any())
                <div class="alert alert-error">
                    <span class="alert-symbol">!</span>
                    <div>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email address</label>

                    <div class="input-wrap">
                        <svg class="field-icon" viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">
                            <rect x="3" y="5" width="18" height="14" rx="3"
                                  stroke="currentColor" stroke-width="1.7"/>
                            <path d="m4 7 8 6 8-6"
                                  stroke="currentColor" stroke-width="1.7"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>

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
                </div>

                <div class="form-group">
                    <div class="label-row">
                        <label for="password">Password</label>
                        <span class="required-note">Required</span>
                    </div>

                    <div class="input-wrap">
                        <svg class="field-icon" viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">
                            <rect x="5" y="10" width="14" height="11" rx="2"
                                  stroke="currentColor" stroke-width="1.7"/>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"
                                  stroke="currentColor" stroke-width="1.7"
                                  stroke-linecap="round"/>
                        </svg>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <button type="button" class="password-toggle"
                                id="togglePassword"
                                aria-label="Show password">
                            <svg id="eyeIcon" viewBox="0 0 24 24" fill="none"
                                 aria-hidden="true">
                                <path d="M2.5 12s3.5-7 9.5-7 9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7Z"
                                      stroke="currentColor" stroke-width="1.7"/>
                                <circle cx="12" cy="12" r="3"
                                        stroke="currentColor" stroke-width="1.7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <label class="remember-option">
                        <input type="checkbox" name="remember" value="1">
                        <span class="custom-checkbox"></span>
                        <span>Remember me</span>
                    </label>

                    <a href="#" class="forgot-link"
                       onclick="return false;">Forgot password?</a>
                </div>

                <button type="submit" class="login-button">
                   <span>Login to Dashboard</span>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 12h14m-6-6 6 6-6 6"
                              stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>

            <div class="form-divider">
                <span></span>
                <small>AUTHORIZED PERSONNEL ONLY</small>
                <span></span>
            </div>

            <div class="security-note">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 3 20 6v5c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-3Z"
                          stroke="currentColor" stroke-width="1.7"
                          stroke-linejoin="round"/>
                    <path d="m9 12 2 2 4-4"
                          stroke="currentColor" stroke-width="1.7"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                <p>Your session is protected. Never share your admin credentials.</p>
            </div>

        </div>

        <footer class="page-footer">
            <span>© {{ date('Y') }} BusBooking</span>
            <span>Administration Portal</span>
        </footer>

    </main>

</div>

<script>
    const toggleButton = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    toggleButton.addEventListener('click', function () {
        const isHidden = passwordInput.type === 'password';

        passwordInput.type = isHidden ? 'text' : 'password';
        toggleButton.setAttribute(
            'aria-label',
            isHidden ? 'Hide password' : 'Show password'
        );

        eyeIcon.innerHTML = isHidden
            ? '<path d="M3 3l18 18M10.6 10.6a2 2 0 0 0 2.8 2.8M9.9 5.2A10.8 10.8 0 0 1 12 5c6 0 9.5 7 9.5 7a16 16 0 0 1-3.1 3.9M6.2 6.2C3.8 7.8 2.5 12 2.5 12s3.5 7 9.5 7a9.7 9.7 0 0 0 3-.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>'
            : '<path d="M2.5 12s3.5-7 9.5-7 9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.7"/>';
    });
</script>

</body>
</html>
