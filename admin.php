<?php
$title = "Danh sách người dùng";
require_once('layouts/header.php');

if (!isset($_SESSION['id'])) {
    header('Location: ' . SITE_URL . '/login.php');
}

if ($_SESSION['role'] != '1') {
    header('Location: ' . SITE_URL . '/index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $pdo->prepare('SELECT `id`, `name`, `email`, `password`, `role` FROM `users` WHERE `role` != 1');
    $stmt->execute();

    $users = $stmt->fetchAll();
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
        <h1 class="text-2xl text-center">Danh sách người dùng</h1>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-md text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            STT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tên
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hành động
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $key => $user) :
                    ?>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                <?= $key + 1 ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $user['name'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $user['email'] ?>
                            </td>
                            <td>
                                <a href="user-detail.php?id=<?= $user['id'] ?>" type="button" class="btn-edit inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">Xem</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('layouts/footer.php'); ?>