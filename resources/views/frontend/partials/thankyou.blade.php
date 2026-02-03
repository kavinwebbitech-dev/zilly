@extends('frontend.layouts.app')

@section('content')
<style>
    /* Container styling */
    .thank-you-container {
        position: relative;
        min-height: 70vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: #fff8f0;
        overflow: hidden;
    }

    /* Heading animation */
    .thank-you-container h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        color: #ff6b6b;
        animation: popIn 0.6s ease forwards;
        transform: scale(0);
    }

    @keyframes popIn {
        0% { transform: scale(0); opacity: 0; }
        60% { transform: scale(1.2); opacity: 1; }
        100% { transform: scale(1); }
    }

    /* Paragraph fade in */
    .thank-you-container p {
        font-size: 1.2rem;
        color: #555;
        opacity: 0;
        animation: fadeIn 1s 0.5s forwards;
    }

    @keyframes fadeIn {
        to { opacity: 1; }
    }

    /* Button animation */
    .thank-you-container a.btn {
        margin-top: 2rem;
        padding: 0.75rem 1.5rem;
        font-size: 1.1rem;
        background: #ff6b6b;
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        opacity: 0;
        animation: fadeIn 1s 1s forwards;
    }

    .thank-you-container a.btn:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
    }

    /* Countdown style */
    #countdown {
        font-size: 1.6rem;
        font-weight: bold;
        color: #ff6b6b;
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.3); }
        100% { transform: scale(1); }
    }

    /* Confetti pieces */
    .confetti {
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #ff6b6b;
        opacity: 0.7;
        top: -10px;
        animation: fall linear forwards;
    }

    @keyframes fall {
        to {
            transform: translateY(100vh) rotate(360deg);
            opacity: 0;
        }
    }
</style>

<div class="thank-you-container">
    <h1>🎉 Thank You!</h1>

    <p>
        Your order has been placed successfully.<br>
        <strong>Payment Method:</strong> Cash on Delivery
    </p>

    <p class="mt-3">
        Redirecting to home in <span id="countdown">5</span> seconds...
    </p>

    <a href="{{ route('home') }}" class="btn">Continue Shopping</a>
</div>

<script>
    // Countdown redirect
    let seconds = 5;
    const countdownEl = document.getElementById('countdown');

    const timer = setInterval(() => {
        seconds--;
        countdownEl.textContent = seconds;

        if (seconds <= 0) {
            clearInterval(timer);
            window.location.href = "{{ route('home') }}";
        }
    }, 1000);

    // Confetti generator
    function createConfetti() {
        const colors = ['#ff6b6b', '#feca57', '#48dbfb', '#1dd1a1', '#5f27cd'];

        for (let i = 0; i < 80; i++) {
            const confetti = document.createElement('div');
            confetti.classList.add('confetti');
            confetti.style.left = Math.random() * window.innerWidth + 'px';
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
            confetti.style.width = confetti.style.height = (Math.random() * 8 + 4) + 'px';

            document.body.appendChild(confetti);

            confetti.addEventListener('animationend', () => confetti.remove());
        }
    }

    // Start confetti on load
    window.onload = () => {
        createConfetti();
        setInterval(createConfetti, 2000);
    };
</script>
@endsection
