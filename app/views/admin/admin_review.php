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
                        <a href="/admin/properties" class="flex  items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-home mr-3"></i> Properties
                        </a>
                    </li>
                    <li>
                        <a href="/admin/reviews" class="flex  bg-gray-200 items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-tags mr-3"></i> Reviews
                        </a>
                    </li>
                    <li>
                        <a href="/admin/booked" class="flex items-center px-4 py-2 text-lg font-medium rounded hover:bg-gray-700">
                            <i class="fas fa-book mr-3"></i> Booked
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <header class="flex items-center justify-between pb-6">
                <h2 class="text-3xl font-semibold">Reviews</h2>
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
                                <th class="py-3 px-6 text-gray-600">Province</th>
                                <th class="py-3 px-6 text-gray-600">District</th>
                                <th class="py-3 px-6 text-gray-600">Contact No</th>
                                <th class="py-3 px-6 text-gray-600">Property Type</th>
                                <th class="py-3 px-6 text-gray-600">Price</th>
                                <th class="py-3 px-6 text-gray-600">User Id</th>
                                <th class="py-3 px-6 text-gray-600">State</th>
                                <th class="py-3 px-6 text-gray-600">Booked</th>
                                <th class="py-3 px-6 text-gray-600">Photo</th>
                                <th class="py-3 px-6 text-gray-600">Created At</th>
                                <th class="py-3 px-6 text-gray-600">Action 1</th>
                                <th class="py-3 px-6 text-gray-600">Action 2</th>
                                <th class="py-3 px-6 text-gray-600">State</th>
                                </tr>
                        </thead>
                        <tbody>

                            <?php foreach($properties AS $property) {?>

                            <tr class="border-b">
                                <td class="py-4 px-6"><?php echo $property['id']?></td>
                                <td class="py-4 px-6"><?php echo $property['province']?></td>
                                <td class="py-4 px-6"><?php echo $property['district'] ?></td>
                                <td class="py-4 px-6"><?php echo $property['contact_no']  ?></td>
                                <td class="py-4 px-6"><?php echo $property['property_type']  ?></td>
                                <td class="py-4 px-6"><?php echo $property['estimated_price']  ?></td>
                                <td class="py-4 px-6"><?php echo $property['user_id']  ?></td>
                                <td class="py-4 px-6"><?php echo $property['state']  ?></td>
                                <td class="py-4 px-6"><?php echo $property['booked']  ?></td>
                                <td class="py-4 px-6">
                                    <img src=" /public/uploads/<?php echo $property['p_photo']  ?>" height="40px" width="40px" alt="">
                                 
                                
                                </td>
                                <td class="py-4 px-6"><?php echo $property['created_at']  ?></td>
                                <td>     
                                <form method="POST" action="/admin/property/review">
                                    <input type="text" value="<?php echo $property['id'] ?>" name="id" hidden>
                                    <input type="text" value="active" name="state" hidden>
                                    <input type="submit" value="Accept" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-red-700">
                                </form>    
                               
                                </td>

                                <td>     
                                <form method="POST" action="/admin/property/review">
                                    <input type="text" value="<?php echo $property['id'] ?>" name="id" hidden>
                                    <input type="text" value="rejected" name="state" hidden>
                                    <input type="submit" value="Reject" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                </form>    
                               
                                </td>

                                <?php if($property['state']=="active") { ?>
                                    

                                    <td class="py-4 px-6">
                                        <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Active</span>
                                    </td>
                                    <?php } else if($property['state']== "pending"){ ?>
                                    <td class="py-4 px-6">
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Pending</span>
                                    </td>
                                    <?php } else {?>
                                    <td class="py-4 px-6">
                                        <span class="bg-red-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">Rejected</span>
                                    </td>
                                    <?php } ?>
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