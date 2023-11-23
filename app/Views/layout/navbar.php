<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Remas Masjid Al-Maghfirah Surabaya</a>
            <ul class="navbar-nav "> <!-- Changed "me-auto" to "ms-auto" for right alignment -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/mustahiq">Daftar Mustahiq</a>
                </li>
                <?php $user = \auth()->user(); ?>
                <?php if ($user != null) : ?>
                    <!-- Display the user's name in the navbar -->
                    <li class="nav-item ms-auto">
                        <a class="nav-link " id="user-info" href="/ttl" text-align: right;>Welcome, <?php echo $user->username; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" href="/login" text-align: right;>Login</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="/register" text-align: right;>Register</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>