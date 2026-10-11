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
            <h1>Create Dealer</h1>

            <div class="text-white px-[350px] mt-4">
                <a href="/dealer/"><- BACK</a>
            </div>
        </div>

    </div>

    <!-- Contrainer -->
    <div class="px-8 py-4 flex justify-center mt-4">

        <table>
            <form action="{{ route('dealer.store') }}" method="POST">
                @crsf 
                <div class="text-white border-2 rounded-2xl p-10 flex flex-col gap-2 text-[20px]">

                    <label class="font-bold">Code</label>

                    <input type="text" name="code" id="" class="rounded-2xl px-12 text-black p-[4px] mb-6">
                    @error('code')
                        <p>{{ $message }}</p>
                    @enderror

                    <label class="font-bold">Name</label>

                    <input type="text" name="name" id="" class="rounded-2xl px-12 text-black p-[4px]">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                    <button type="submit"
                        class="border-2 rounded-2xl mt-6 hover:text-[#ffe37a] hover:border-[#ffe37a]">Submit</button>

                </div>

            </form>
        </table>

    </div>

</body>

</html>