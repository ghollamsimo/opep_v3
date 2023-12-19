<?php
require_once '../class/category.class.php';
$category  = new Category();

if (isset($_POST['add_category'])){
    $categoryname = $_POST['namecategory'];
    // Set values using setter methods (if needed)
    $category->__set("categoryname",$categoryname);

    try {
        $category->insertData();
        echo 'Inserted successfully';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

if (isset($_POST['delete'])) {
    $category->__set("categoryId" , $_POST['id_category']);
    $category->Delete();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/plants_dashboard.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Document</title>
    <style>

    </style>
</head>

<body>
<?php include '../include/sidebar.php' ?>

<section class="home ">
    <div class="text nav_dash">
        <h6>Welcome To Opep Dashboard</h6>
        <div class="icon">
            <i class='bx bx-search icon'></i>
            <i class='bx bx-bell icon'></i>
            <i class='bx bx-user-circle'></i>
        </div>
    </div>
    <div class="home_content">
        <div class="text adding">
            <h6 class="text-lg">Add Somme Category If You Want</h6>
            <button type="button" data-modal-toggle="authentication-modal" class="button bg-[#557C55]"><i
                    class='bx bx-plus'></i></button>
        </div>
        <div>
            <div class="text">
            </div>
            <div class="table-wrapper">
                <table class="fl-table" >
                    <thead>
                    <tr>
                        <th class="w-full">Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </thead>
                    <tbody>
                    <tbody>
                    <?php
                    $categorys = $category->read();
                    foreach ($categorys as $row):?>
                        <tr class="text-center">
                            <td><?= $row['categoryName'] ?></td>

                            <td><button data-modal-target="delete-modal"
                                        data-modal-toggle="delete-modal-<?= $row["categoryId"] ?>"  class="btn bg-red-600 p-1 w-20 text-white rounded-lg" name="">Delete</button></td>

                            <td><button data-modal-target="edit-modal"
                                        data-modal-toggle="edit-modal"  class="btn bg-green-800 p-1 w-20 text-white rounded-lg" name="">Update</button></td>
                        </tr>


                        <!-- Modal For Delete Plants -->
                        <div id="delete-modal-<?= $row["categoryId"] ?>" tabindex="-1"
                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow ">

                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you
                                            want to
                                            delete this product?</h3>
                                        <form action="" method="post">
                                            <input type="hidden" name="id_category" value="<?= $row["categoryId"] ?>">
                                            <button data-modal-hide="delete-modal" type="submit" name="delete"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                Yes, I'm sure
                                            </button>
                                            <button data-modal-hide="delete-modal" type="submit"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>



                    <?php endforeach; ?>
                    </tbody>


                    <tbody>
                </table>
            </div>
        </div>



</section>



<!-- Modal For Add New Products -->
<div id="authentication-modal" aria-hidden="true"
     class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
    <div class="relative w-full max-w-md px-4 h-56 md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow relative p-5">
            <div class="flex justify-end p-2">
                <button type="button"
                        class="text-gray-400  hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  dark:hover:text-white"
                        data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="p-5">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="relative mt-2 rounded-md shadow-sm">

                            <input type="text" name="namecategory"
                                   class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                   placeholder="Name Category">
                        </div>
                    </div>
                    <div class="flex justify-end m-2 ">

                        <button
                            class="px-4 py-2 bg-gradient-to-r bg-[#557C55] hover:opacity-80 text-white text-sm font-medium rounded-md"
                            name="add_category" type="submit">
                            Save
                        </button>
                </form>
            </div>


        </div>
    </div>

</div>



<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>


</body>

</html>
