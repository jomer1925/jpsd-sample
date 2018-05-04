<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ajax extends CI_Controller 
{
 
    function login_authentication()
    {
        if(isset($_POST['email']))
        {
            $username = $_POST['email'];
            $password = md5($_POST['password']);
            $condition = "username =" . "'" . $username . "'"." and "."password=" . "'" . $password . "'";

            $this->db->select('*');
            $this->db->from('tbl_admin');
            $this->db->where($condition);
            $query = $this->db->get();
            if ($query->num_rows() == 0) 
            {
                echo '<div class="alert alert-danger">
                     Invalid Username / Password
                     </div>';
            }
            else
            {
                echo 'loggedIn';
            }
        }
    }
    function get_items()
    {
        $query = $this->db->get("tbl_Store");
        if ($query->num_rows() == $_SESSION['count'])
        {
           echo "NoChangesInDatabase";
        } 
        else
        {
            $_SESSION['count']=$query->num_rows();
            echo '<table id="bootstrap-data-table" class="table table-striped table-bordered" style="width:100%">';
		    echo '  <thead>';
    	    echo '      <tr>';
	        echo '          <th>ID</th>';
    	    echo '          <th>Code</th>';
            echo '          <th>Name</th>';
            echo '          <th>Username</th>';
            echo '          <th>Password</th>';
            echo '          <th>DateCreated</th>';
            echo '          <th>Count</th>';
            echo '          <th>Button</th>';
		    echo '      </tr>';
    	    echo '  </thead>';
	        echo '  <tbody>';
            foreach($query->result() as $r) 
            {
                echo '<tr>';
                echo '      <td>';
                echo $r->ID;
                echo '      </td>';
                echo '      <td>';
                echo $r->Code;
                echo '      </td>';
                echo '      <td>';
                echo $r->Name;
                echo '      </td>';
                echo '      <td>';
                echo $r->Username;
                echo '      </td>';
                echo '      <td>';
                echo $r->Password;
                echo '      </td>';
                echo '      <td>';
                echo $r->DateCreated;
                echo '      </td>';
                echo '      <td>';
                echo $r->Count;
                echo '      </td>';
                echo '      <td>';
                echo '<a href="" class="btn btn-danger btn-block">Delete</a>';
                echo '<input type="button" class="btn btn-info btn-block" data-toggle="modal" 
                onclick="clickMe(\''. $r->ID . '\',\''. $r->Code . '\',\''. $r->Name . '\',\''. $r->Username .'\')"
                data-target="#editModal" value="Edit">';
                echo '      </td>';
                echo '</tr>';
            }
            echo '  </tbody>';
	        echo '</table>';
        }
    }
    function get_items1()
    {
        $query = $this->db->get("tbl_Store");
        if ($query->num_rows() == $_SESSION['count1'])
        {
           echo "NoChangesInDatabase";
        } 
        else
        {
            $_SESSION['count1']=$query->num_rows();
            echo '<table id="bootstrap-data-table" class="table table-striped table-bordered" style="width:100%">';
		    echo '  <thead>';
    	    echo '      <tr>';
	        echo '          <th>ID</th>';
    	    echo '          <th>Code</th>';
            echo '          <th>Name</th>';
            echo '          <th>Username</th>';
            echo '          <th>Password</th>';
            echo '          <th>DateCreated</th>';
            echo '          <th>Count</th>';
            echo '          <th>Button</th>';
		    echo '      </tr>';
    	    echo '  </thead>';
	        echo '  <tbody>';
            foreach($query->result() as $r) 
            {
                echo '<tr>';
                echo '      <td>';
                echo $r->ID;
                echo '      </td>';
                echo '      <td>';
                echo $r->Code;
                echo '      </td>';
                echo '      <td>';
                echo $r->Name;
                echo '      </td>';
                echo '      <td>';
                echo $r->Username;
                echo '      </td>';
                echo '      <td>';
                echo $r->Password;
                echo '      </td>';
                echo '      <td>';
                echo $r->DateCreated;
                echo '      </td>';
                echo '      <td>';
                echo $r->Count;
                echo '      </td>';
                echo '      <td>';
                echo '<a href="" class="btn btn-danger btn-block">Delete</a>';
                echo '<input type="button" class="btn btn-info btn-block" data-toggle="modal" 
                onclick="clickMe(\''. $r->ID . '\',\''. $r->Code . '\',\''. $r->Name . '\',\''. $r->Username .'\')"
                data-target="#editModal" value="Edit">';
                echo '      </td>';
                echo '</tr>';
            }
            echo '  </tbody>';
	        echo '</table>';
        }
    }
    function search()
    {
        if(isset($_POST['search']))
        {
            $search = $_POST['search'];
            $condition = "Code like" . "'%" . $search . "%'"." or "."Name like" . "'%" . $search . "%'" ." or "."Username like" . "'%" . $search . "%'";

            $this->db->select('*');
            $this->db->from('tbl_store');
            $this->db->where($condition);
            $query = $this->db->get();
            if ($query->num_rows() != 0) 
            {
                echo '<table id="bootstrap-data-table" class="table table-striped table-bordered" style="width:100%">';
                echo '  <thead>';
                echo '      <tr>';
                echo '          <th>ID</th>';
                echo '          <th>Code</th>';
                echo '          <th>Name</th>';
                echo '          <th>Username</th>';
                echo '          <th>Password</th>';
                echo '          <th>DateCreated</th>';
                echo '          <th>Count</th>';
                echo '          <th>Button</th>';
                echo '      </tr>';
                echo '  </thead>';
                echo '  <tbody>';
                foreach($query->result() as $r) 
                {
                    echo '      <tr>';
                    echo '      <td>';
                    echo $r->ID;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->Code;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->Name;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->Username;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->Password;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->DateCreated;
                    echo '      </td>';
                    echo '      <td>';
                    echo $r->Count;
                    echo '      </td>';
                    echo '      <td>';
                    echo '<a href="" class="btn btn-danger">Delete</a>';
                    echo '      </td>';
                    echo '      </tr>';
                }
                echo '  </tbody>';
                echo '</table>';
            }
            else
            {
                echo '<table id="bootstrap-data-table" class="table table-striped table-bordered" style="width:100%">';
                echo '  <thead>';
                echo '      <tr>';
                echo '          <th>ID</th>';
                echo '          <th>Code</th>';
                echo '          <th>Name</th>';
                echo '          <th>Username</th>';
                echo '          <th>Password</th>';
                echo '          <th>DateCreated</th>';
                echo '          <th>Count</th>';
                echo '          <th>Button</th>';
                echo '      </tr>';
                echo '  </thead>';
                echo '  <tbody>';
                echo '  </tbody>';
                echo '</table>';
            }
        }
    }
    function update()
    {
        $_SESSION['count'] = 0;
        $_SESSION['count1'] = 0;

        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $username = $_POST['username'];



        $data = array('code' => $code, 'name' => $name, 'username' => $username);

        $this->db->where('id',$id);
        $this->db->update('tbl_store',$data);
        echo "<div align='center' class='sufee-alert alert with-close alert-info alert-dismissible fade show'>
        Record Updated.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button></div>";
    }
    function adddata()
    {
        if($_POST['password'] != $_POST['confirm_password'])
        {
            echo "<div align='center' class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
                Password Mismatch.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button></div>";
        }
        else
        {
            if(isset($_POST['code']) and isset($_POST['name']) and isset($_POST['username']) and isset($_POST['password']))
            {
                $code =$_POST['code'];
                $name =$_POST['name'];
                $username =$_POST['username'];
                $password =md5($_POST['password']);

                $data = array(
                    'code' => $code,
                    'name' => $name,
                    'username' => $username,
                    'password' => $password,
                    );
                $this->db->insert('tbl_store',$data);
                echo "<div align='center' class='sufee-alert alert with-close alert-primary alert-dismissible fade show'>
                New Data Added to the Record.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button></div>";
                
            }
            else
            {
                echo "<div align='center' class='alert alert-danger'>All Field are required.</div>";
            }

        }
    }
}
