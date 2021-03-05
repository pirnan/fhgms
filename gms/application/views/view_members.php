<!DOCTYPE html>
<html>
<head>
	<title>Gym Members</title>
	<style>
		.actions a
		{
			color: black;
		}

        .table_class
        {
            background-color:white;
            border-radius: 10px;
            padding: 10px;

        }
        .td_labels
        {
            color: #101001;
            width: 200px;
        }

        .tr_labels
        {
            background-color: gold;
        }

        .member_card_div
        {
            height: 350px;
            width: 240px;
            background-color: #151515;
            margin:10px;
            float: left;
            padding:10px;
            border-radius: 20px;
            color:#151515;
        }

        .member_card_inner_div
        {
            height: 330px;
            width: 220px;
            background-color: gold;
            border-radius: 20px;
            padding-top:20px;
        }

        .profile_class
        {
            width: 120px;
            height: 100px;
        }

        .labels_div
        {
            position: relative;
            top: 10px;
        }

        .labels
        {
            color: #101010;
            display: block;
            font-size: 20px;
        }

        .buttons_div
        {
            position: relative;
            top:30px;
        }

        .edit_delete_btn
        {
            padding:10px;
        }
	</style>
</head>
<body>
	<center>
		<h1 style="font-size:50px; margin-top:50px;">Members</h1>

        <?php foreach ($h->result() as $value) {
         ?>

            <div class="member_card_div">
                <div class="member_card_inner_div">

                    <div class="profile_div">
                        <?php echo "<img class='profile_class' src='../../uploads/".$value->member_photo."'>" ?>
                    </div>

                    <div class="labels_div">
                        <label class="labels">
                            ID : <?php echo $value->member_id ?>
                        </label>
                        <label class="labels">
                            First Name: <?php echo $value->first_name ?>
                        </label>
                        <label class="labels">
                            Last Name : <?php echo $value->last_name ?>
                        </label>
                        </label>
                        <label class="labels">
                            height : <?php echo $value->height ?>
                        </label>
                        <label class="labels">
                            weight : <?php echo $value->weight ?>
                        </label>
                    </div>

                    <div class="buttons_div">
                        <button class="edit_delete_btn">EDIT</button>
                        <button class="edit_delete_btn">DELETE</button>
                    </div>
                    

                </div>
            </div>


        <?php 
        } 
        ?>
	       

	</center>
</body>
</html>