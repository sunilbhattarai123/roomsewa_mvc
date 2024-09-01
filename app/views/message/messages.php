<style>
    a {
        display: block;
    }

    .parent {

        height: 100vh;
        max-width: 100%;
        padding: 10px 40px;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
        display: flex;
        flex-direction: column;
    }



    .list {
        height: 100%;
        padding: 10px 40px;
        margin-bottom: 10px;
        width: 1000px;
        overflow-y: auto;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        border: 1px solid #f0f0f0;
        border-radius: 10px;

    }

    form {
        display: flex;
        gap: 20px;
        width: 1000px;

    }

    .message {
        width: 100%;
        outline: none;
    }
    .msg_sender_i {
        align-self: end;
        margin: 10px;
        border-radius: 10px;
    }

    .msg_receiver_i {
        align-self: start;
        margin: 10px;
        border-radius: 10px;
    }

    .msg_sender {
        align-self: end;
        padding: 10px 10px;
        margin: 10px;
        border-radius: 10px;
        background-color: green;
        color: white;
    }

    .msg_receiver {
        align-self: start;
        padding: 10px 10px;
        margin: 10px;
        border-radius: 10px;
        background-color: gray;
        color: white;
    }

    .profile_name_image{
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content:center;
    }
</style>


<div class="parent">
    <!-- <h3>Profiles</h3> -->
   
   <div class="div profile_name_image">
    <img src="/public/uploads/<?php echo $owner['profile_pic'] ?>" style="height:50px; width:50px; border-radius:25px;">
        <h4><?php echo $owner['full_name'] ?></h4>

   </div>
   
    <div id="list_msg" class="list">

        <?php foreach ($messages as $message) { ?>

            <?php if ($message['image']) { ?>

                <img class="<?php echo $message['sender_id'] == $user->id ? 'msg_sender_i' : 'msg_receiver_i' ?>" src="/public/uploads/<?php echo $message['image'] ?>" style="width:300px;">



            <?php } else { ?>


                <div class="<?php echo $message['sender_id'] == $user->id ? 'msg_sender' : 'msg_receiver' ?>">  <?php echo $message['message'] ?> </div>
            <?php } ?>

        <?php } ?>

    </div>


    <form id="form" method="post" action="/send_message" enctype="multipart/form-data">
    
    <label style="cursor: pointer;;background-color:green;border-radius:10px;padding: 5px 10px; color:white;text-align: center;" for="image_file"> Upload Image </label>
    
    <input type="text" hidden name="id" value="<?php echo $owner['id'] ?>">

        <input style="border-radius:10px;padding:10px" type="text" id="input_msg" placeholder="Enter your message" name="message" class="message">

        <input style="display:none;" type="file" accept="image/* " name="image" id="image_file">
        <input style="cursor: pointer;;background-color:green;border-radius:10px;padding: 5px 10px; color:white;text-align: center; width:80px" id="send" class="send btn btn-primary" type="submit" value="Send">
    </form>

</div>

<script>
    var list_msg = document.getElementById('list_msg');
    var input_msg = document.getElementById('input_msg');


    const image_file = document.getElementById('image_file');
    const form = document.getElementById('form');
    const send = document.getElementById('send');

    image_file.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            form.submit();
        }
    });


    input_msg.focus();
    list_msg.scrollTop = list_msg.scrollHeight;
</script>