<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex min-h-screen">
        <aside class="w-64 bg-green-900 text-white flex flex-col">
            <div class="p-6">
            <a href="/admin/"> <h1 class="text-2xl font-bold">Admin Panel</h1></a> 

            </div>
            <nav class="flex-1 px-4 py-6">
                <ul class="space-y-4">
                    <li>
                        <a href="/admin/users" class="flex items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-users mr-3"></i> Users
                        </a>
                    </li>
                    <li>
                        <a href="/admin/properties" class="flex items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-home mr-3"></i> Properties
                        </a>
                    </li>
                    <li>
                        <a href="/admin/reviews" class="flex items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-tags mr-3"></i> Reviews
                        </a>
                    </li>
                    <li>
                        <a href="/admin/booked" class="flex  bg-gray-200  items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-book mr-3"></i> Booked
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <header class="flex items-center justify-between pb-6">
                <h2 class="text-3xl font-semibold">Booked</h2>
                <a href="/admin/logout">
                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-blue-700">Logout</button>

                </a>
            </header>

        

            <!-- Table Section -->
            <section>
    
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="w-full bg-gray-100 text-left">
                                <th class="py-3 px-6 text-gray-600">ID</th>
                                <th class="py-3 px-6 text-gray-600">Property Id</th>
                                <th class="py-3 px-6 text-gray-600">Booked user Id</th>
                                <th class="py-3 px-6 text-gray-600">Name</th>
                      
    
                                </tr>
                        </thead>
                        <tbody>

                            <?php foreach($properties AS $property) {?>

                            <tr class="border-b">


                                <td class="py-4 px-6"><?php echo $property['booking_id']?></td>
                                <td class="py-4 px-6"><?php echo $property['id']?></td>

                                <td class="py-4 px-6"><?php echo $property['booked_user'] ?></td>
                                <td class="py-4 px-6"><?php echo $property['full_name'] ?></td>
                            
                             

                           
                           
                           
                           
                                </tr>

                            <?php } ?>


                          
                            <!-- More rows -->
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>