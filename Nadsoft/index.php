<?php
include 'members_db.php';

if(isset($_REQUEST['parent']) && isset($_REQUEST['name']))
{
	$parent=$_REQUEST['parent'];
	$name=$_REQUEST['name'];
	$objUser = new Members();
	if($objUser->save($parent,$name))
	{
		return 1;
	}else{
		return 0;
	}
}

class Members{

	
	public function __construct()
	{
		$this->db = member_db::db_connection();
	}
	
	public function fetchMemberTree($parent = 0, $spacing = '', $user_tree_array = ''){		//for dropdown
			
		if (!is_array($user_tree_array))
			    $user_tree_array = array();

			  $sql = "SELECT `id`, `Name`, `parentId` FROM `members` WHERE 1 AND `parentId` = $parent ORDER BY id ASC";
			  // echo $sql;
			  $query = $this->db->connection->query($sql);
			  if (mysqli_num_rows($query) > 0) {
			    while ($row = mysqli_fetch_object($query)) {
			      $user_tree_array[] = array("id" => $row->id, "name" => $spacing . $row->Name);
			      $user_tree_array = $this->fetchMemberTree($row->id, $spacing . '&nbsp;&nbsp;', $user_tree_array);
			    }
			  }
			  return $user_tree_array;

	}

	public function fetchMemberTreeList($parent = 0, $user_tree_array = '') {		//for page display

		    if (!is_array($user_tree_array))
		    $user_tree_array = array();

				  $sql = "SELECT `id`, `Name`, `parentId` FROM `members` WHERE 1 AND `parentId` = $parent ORDER BY id ASC";
				  $query = $this->db->connection->query($sql);
				  if (mysqli_num_rows($query) > 0) {
				     $user_tree_array[] = "<ul>";
				    while ($row = mysqli_fetch_object($query)) {
					  $user_tree_array[] = "<li id=".$row->id.">". $row->Name."</li>";
				      $user_tree_array = $this->fetchMemberTreeList($row->id, $user_tree_array);
				    }
					$user_tree_array[] = "</ul>";
				  }
				  return $user_tree_array;
		}

		 public function save($parent,$name)
		    {
				$sql = "INSERT INTO members (Name,parentId) VALUES ('$name',$parent)";
			
		// echo $sql;

				if($this->db->connection->query($sql))
				{
					return 1;	
				}
				else
				{
					return 0;
				}
			} 
	  
}
$objUser = new Members();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
	<title>Member Tree</title>
  </head>
  <body>
    <div id="container">
      <div id="body">
        <div class="height20"></div>
        <article>
		
          <ul>
            <?php
            $res = $objUser->fetchMemberTreeList();
            foreach ($res as $r) {
              echo  $r;
            }
            ?>
          </ul>
          <div class="height10"></div>
        </article>
        <div class="height10"></div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Member
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form name="MemberForm" id="MemberForm">
      	Parent:
        <?php 
			$categoryList = $objUser->fetchMemberTree();
			?>
			<div style="text-align:center;" >
				<select style="width:200px;height:35px;border:1px solid #6d37b0;padding:5px;" id="parent_id">
					<option value="">select Parent</option>
				<?php foreach($categoryList as $cl) { ?>
				<option value="<?php echo $cl["id"] ?>"><?php echo $cl["name"]; ?></option>
				<?php } ?>
				</select>
			</div><br>
        Name:<input type="text" name="mem_name" id="mem_name">
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_changes">Save changes</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
	$("#save_changes").on('click',function(){			//save new member
		var parent = $("#parent_id option:selected" ).val();
		var name = $("#mem_name").val();
			if(parent=="")
				{
					alert("Select Parent Name");
				}else if(name=="")
				{
					alert("Enter Name");
				}else{

						 $.ajax({
	                     url:'index.php',
	                     type:"post",
	                     data:{parent:parent,name:name},
	                      success: function(data){
								 $("#exampleModal").modal('hide');
								 // $("#"+parent).find("ul").append('<li>'+name+'</li>');
								 $("#"+parent).next("ul").append('<li>'+name+'</li>');		//append member
	                   }
	                 });
				}
	})
</script>