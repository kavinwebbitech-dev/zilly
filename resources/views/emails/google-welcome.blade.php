<div
    style="font-family: Arial, sans-serif; background-color: #fdf6f0; padding: 30px; border-radius: 12px; text-align: center; color: #333;">
    <h2 style="color: #FF6B6B; margin-bottom: 10px;">Hello {{ $user->name }} 👋</h2>

    <p style="font-size: 16px; line-height: 1.6;">
        Welcome to <strong>Zilly</strong>! 🎉
    </p>

    <p style="font-size: 16px; line-height: 1.6;">
        You’ve successfully created your account. Your account is now ready to explore amazing products! 🛒✨
    </p>


    <p style="font-size: 16px; line-height: 1.6;">
        Start your shopping journey and enjoy exclusive offers! 🚀
    </p>

    <div style="margin-top: 20px;">
        <a href="{{ app()->environment('production') ? url('https://webbitech.in/gama/zilly/public/') : route('home') }}"
            style="display: inline-block; background-color: #FF6B6B; color: #fff; padding: 12px 25px; text-decoration: none; border-radius: 8px; font-weight: bold;">
            Start Shopping 🛍️
        </a>
    </div>


    <p style="margin-top: 25px; font-size: 14px; color: #777;">
        Thanks,<br>
        Team Zilly 💖
    </p>
</div>
