@include('components.header')

<style>
    /* Modern Dark Theme with Red Gradient */
    .auth-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #1a1a1a 0%, #2d1b1b 50%, #1a1a1a 100%);
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-card {
        background: rgba(30, 30, 30, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 40px;
        width: 100%;
        max-width: 420px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px rgba(220, 20, 60, 0.15),
                    0 15px 35px rgba(220, 20, 60, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .login-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .login-title {
        color: #fff;
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 8px;
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .login-subtitle {
        color: #b0b0b0;
        font-size: 1rem;
        font-weight: 300;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-label {
        display: block;
        color: #d0d0d0;
        margin-bottom: 8px;
        font-weight: 500;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input {
        width: 100%;
        padding: 15px 20px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #ff416c;
        background: rgba(255, 255, 255, 0.08);
        box-shadow: 0 0 0 3px rgba(255, 65, 108, 0.2);
        transform: translateY(-2px);
    }

    .form-input::placeholder {
        color: #888;
    }

    .submit-btn {
        width: 100%;
        padding: 16px;
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: 10px;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 65, 108, 0.4);
        background: linear-gradient(135deg, #ff4b2b, #ff416c);
    }

    .submit-btn:active {
        transform: translateY(-1px);
    }

    .register-section {
        text-align: center;
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .register-text {
        color: #b0b0b0;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }

    .register-btn {
        display: inline-block;
        padding: 12px 30px;
        background: transparent;
        color: #fff;
        text-decoration: none;
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .register-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #ff416c;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 65, 108, 0.3);
    }

    .error-message {
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.2), rgba(220, 53, 69, 0.1));
        border: 1px solid rgba(220, 53, 69, 0.3);
        color: #ff6b7a;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 25px;
        backdrop-filter: blur(10px);
    }

    .error-message ul {
        margin: 0;
        padding-left: 20px;
    }

    /* Floating animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .login-card {
        animation: float 6s ease-in-out infinite;
    }

    /* Input icons (optional) */
    .form-group {
        position: relative;
    }

    .form-group::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
        z-index: 1;
    }

    .form-input {
        padding-left: 50px;
    }
</style>

<div class="auth-container">
    <div class="login-card">
        <div class="login-header">
            <h1 class="login-title">Welcome Back</h1>
            <p class="login-subtitle">Sign in to your account</p>
        </div>

        @if($errors->any())
            <div class="error-message">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-input" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-input" name="password" placeholder="Enter your password" required>
            </div>
            
            <button type="submit" class="submit-btn">Sign In</button>
        </form>

        <div class="register-section">
            <p class="register-text">Don't have an account?</p>
            <a href="{{ route('register') }}" class="register-btn">Create Account</a>
        </div>
    </div>
</div>

@include('components.footer')