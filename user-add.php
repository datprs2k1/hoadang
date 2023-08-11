<?php

$title = "Thêm tài khoản";

require_once('layouts/header.php');

if (!isset($_SESSION['id'])) {
    header('Location: ' . SITE_URL . '/login');
}

if ($_SESSION['role'] != '1') {
    header('Location: ' . SITE_URL);
}

$notif = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $hashedPassword = md5(md5($password));

    $stmt = $pdo->prepare('INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (?, ?, ?, ?)');
    $result = $stmt->execute([
        uniqid(),
        $name,
        $email,
        $hashedPassword
    ]);

    if (!$result) {
        $notif = 'Tài khoản hoặc mật khẩu không chính xác';
    } else {
        header('location: /user.php');
    }
}

?>

<div class="relative mb-20 md:mb-40">
    <div class="flex justify-center h-[100px]">
        <img src="<?= SITE_URL . '/assets/covers/default.jpg' ?>" class="w-full md:w-2/3 rounded-b-xl object-cover" style="object-position: 50% <?= $user['cover_position'] ?>%" id="preview-cover" />
    </div>
    <div class="absolute left-[5%] md:left-[20%] bottom-[-4.5rem] md:bottom-[-8rem] w-[95%] md:w-[80%]">
        <div class="flex items-center space-x-3">
            <img src="<?= SITE_URL . '/assets/avatars/default.jpg' ?>" class="bg-white rounded-full min-w-[110px] h-[110px] md:w-1/6 md:h-[215px] p-1 object-cover object-center" id="preview-avatar" />

            <div class="w-full mt-10">
                <span class="text-sm md:text-lg font-bold">ABC</span>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <div class="bg-white mx-4 p-3 space-y-2 text-md text-slate-700 rounded-md w-full md:w-2/3">
        <h1 class="text-2xl text-center">Thêm người dùng</h1>
        <div class="mt-2">
            <div class="flex flex-col justify-center items-center">
                <div class="bg-white w-5/6 md:w-1/4 rounded-md p-2">
                    <form method="POST" id="form">
                        <span class="text-xs text-red-500"><?= ($notif != '' ? $notif : '') ?></span>
                        <div class="my-2">
                            <label for="name">Tên</label>
                            <input type="text" id="name" name="name" class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                        </div>
                        <div class="my-2">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                        </div>
                        <div class="my-2">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="border-[1px] border-slate-200 rounded-md p-2 w-full mt-2" />
                        </div>
                        <div class="flex justify-center mt-5">
                            <button type="submit" id="loginBtn" class="bg-blue-400 text-white px-4 py-2 rounded">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('layouts/footer.php'); ?>