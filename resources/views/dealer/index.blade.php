<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Management</title>
    <!-- Corrected CDN script -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#010736] flex flex-col">
    <!-- Header -->
    <div class="text-[#ffe37a] px-6 py-4 flex justify-center items-center">
        <h1 class="text-[40px] font-bold mr-20">ASTRA</h1>

        <div class="font-semibold mr-6">
            <nav>
                <a href="" class="px-20">Dealer</a>
                <a href="" class="px-20">Area</a>
                <a href="" class="px-20">Departement</a>
                <a href="" class="px-20">Task</a>
            </nav>
        </div>

    </div>

    <div class="flex items-center">

        <!-- nama page -->
        <div class="text-2xl text-white px-32 mt-8 font-bold">
            <h1>Dealer Management</h1>
        </div>

        <!-- add dealer -->
        <div
            class="border-2 text-white font-semibold w-32 flex justify-center rounded-2xl mt-8 ml-[600px] hover:text-[#ffe37a]">
            <a href="" class="text-[18px]">Add Dealer</a>
        </div>

    </div>

    <!-- Contrainer -->
    <div class="px-8 py-4 flex justify-center mt-4">

        <table>
            <thead class="text-white border-2">
                <tr class="">
                    <th class="text-center px-40 pt-2 pb-2">Code</th>
                    <th class="text-center px-40 pt-2 pb-2">Name</th>
                    <th class="text-center px-40 pt-2 pb-2">Action</th>
                </tr>
            </thead>

            <tbody class="text-white border-2">
                <tr>
                    <td class="text-center pt-4 pb-2">1001</td>
                    <td class="text-center pt-4 pb-2">Collin Lee</td>

                    <td>
                        <div class="flex items-center justify-center gap-2 pt-4 pb-4">
                            <a href="" class="border-2 rounded-2xl bg-gray-500 text-[13px] pl-4 pr-4">Detail</a>
                            <a href="" class="border-2 rounded-2xl bg-green-500 text-[13px] pl-4 pr-4">Edit</a>

                            <form action="" method="POST">
                                <button class="border-2 rounded-2xl bg-red-500 text-[13px] pl-4 pr-4">Hapus</button>
                            </form>
                        </div>
                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</body>

</html>