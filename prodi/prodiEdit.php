<?php
include '../layouts/header.php';
// include 'layouts/nav.php';
include '../library/prodiAct.php';
$id = $_GET['id'];
$db = new Crud;
$data = $db->ShowOneData($id);

if (isset($_POST['submit'])) {
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $db = new Crud;
    $db->EditData($id, $prodi, $jenjang);
    header('location:prodiData.php');
}
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Data Program Studi</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="grid gap-4 lg:grid-cols-1 lg:gap-6">
                <div class="w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="prodi" id="name" value="<?= $data['prodi'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenjang</label>
                    <div>
                        <select name="jenjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="<?= $data['jenjang'] ?>" hidden><?= $data['jenjang'] ?></option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Edit
            </button>
            <a href="prodiData.php" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Batal
            </a>
        </form>
    </div>
</section>


<?php
include '../layouts/footer.php';
?>