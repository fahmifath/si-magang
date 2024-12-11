<?php
include '../layouts/header.php';
// include 'layouts/nav.php';
include '../library/dospemAct.php';
$id = $_GET['id'];
$db = new Crud;
$data = $db->ShowOneData($id);
$prodi = $db->ShowDataProdi();

if (isset($_POST['submit'])) {
    $id = $id;
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];
    $penilaian = $_POST['penilaian'];
    $db = new Crud();
    $db->EditData($id, $nama, $nidn, $nip, $alamat, $prodi, $penilaian);
    header('location:dospemData.php'); ?>
<?php
}
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Data Dosen Pembimbing</h2>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="grid gap-4 lg:grid-cols-1 lg:gap-6">
                <div class="w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="name" value="<?=$data['nama_dospem']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                <div class="w-full">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                    <input type="number" name="nidn" id="brand" value="<?=$data['nidn']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                    <input type="number" name="nip" id="price" value="<?=$data['nip']?>"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" name="alamat" id="price" value="<?=$data['alamat']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prodi</label>
                    <div>
                        <select name="prodi" id="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="<?=$data['prodi_id']?>" hidden><?=$data['prodi']?></option>
                            <?php
                            foreach ($prodi as $prodi) {
                                echo '<option value="' . $prodi['id'] . '">' . $prodi['prodi'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penilaian</label>
                    <input type="text" name="penilaian" id="penilaian" value="<?=$data['penilaian']?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                </div>
            </div>
            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Edit
            </button>
            <a href="dospemData.php" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Batal
            </a>
        </form>
    </div>
</section>

<?php
include '../layouts/footer.php';
?>