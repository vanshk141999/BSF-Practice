<!-- stores basic functions -->
<?php

    function check_connection($connection){
        if(!$connection){
            die("Database connection failed:".mysqli_error());
        }
    }

    function get_all_subjects($connection, $subject_id, $visible){
        // $subject_set_query = "SELECT * FROM subjects WHERE visible=\"1\" OR visible=\"0\"";
        // if(isset($subject_id)){
        //     $subject_set_query .= "AND id=$subject_id ";
        // }
        $subject_set_query = "SELECT * FROM subjects ";
        if(isset($subject_id)){
            $subject_set_query .= "WHERE id=$subject_id";
        }
        if(isset($visible)){
            $subject_set_query .= "WHERE visible = 1";
        }
        // else{
        //     $subject_set_query .= " ";
        // }
        $subject_set_query .= " ORDER BY position ASC";
        //Perform Database query for subjects
        $subject_set = mysqli_query($connection, $subject_set_query);
        check_connection($subject_set);
        return $subject_set;
    }

    function get_all_pages($connection, $subject, $page_id){
        $page_set_query = "SELECT * FROM pages ";
        if(isset($page_id)){
            $page_set_query .= "WHERE id=$page_id ";
        }
        else{
            $page_set_query .= "WHERE subject_id={$subject["id"]} ";
        }
        $page_set_query .= "AND visibility=\"1\" ORDER BY position ASC";
        // $page_set_query = "SELECT * FROM pages  ORDER BY position ASC";
        $page_set = mysqli_query($connection, $page_set_query);
        check_connection($page_set);
        return $page_set;
    }

    function find_selected_page(){
        GLOBAL $selected_subj, $selected_page;

        if(isset($_GET['subj'])){
            $selected_subj = $_GET['subj'];
        }
        elseif(isset($_GET['page'])){
            $selected_page = $_GET['page'];
    
        }
    }

    function nav_menu($connection, $selected_subj, $selected_page){

        $subject_set = get_all_subjects($connection, NULL, NULL);

        //Using returned Data
        while($subject = mysqli_fetch_array($subject_set)){
            echo "<li class=\"" ?>
            <!-- Highlight selected subject -->
            <?php
            if($subject["id"] == $selected_subj){
                echo "text-[#00A86C]";
            }
            ?>
            <?php 
            
            echo "mb-2 mt-8 text-xl\""."><a href=\"edit_subject.php?subj=".urlencode($subject["id"])."\">".$subject["menu_name"]."</a></li>";

                //Perform Database query for pages
                $page_set = get_all_pages($connection, $subject, NULL);

                //Using returned Data
                while($page = mysqli_fetch_array($page_set)){
                    echo "<li class=\"" ?>
                    <!-- Highlight selected page -->
                    <?php
                    if($page["id"] == $selected_page){
                        echo "text-[#00A86C]";
                    }
                    ?>
                    <?php 
                    
                    echo "<li class=\"mt-1\"><a href=\"content.php?page=".urlencode($page["id"])."\">> ".$page["menu_name"]."</a></li>";
                }
        }
    }

    function public_nav_menu($connection, $selected_subj, $selected_page){

        $subject_set = get_all_subjects($connection, NULL, 1);

        //Using returned Data
        while($subject = mysqli_fetch_array($subject_set)){
            echo "<li class=\"" ?>
            <!-- Highlight selected subject -->
            <?php
            if($subject["id"] == $selected_subj){
                echo "text-[#00A86C]";
            }
            ?>
            <?php 
            
            echo "mb-2 mt-8 text-xl\""."><a href=\"index.php?subj=".urlencode($subject["id"])."\">".$subject["menu_name"]."</a></li>";

            if($subject["id"] == $selected_subj){
                //Perform Database query for pages
                $page_set = get_all_pages($connection, $subject, NULL);

                //Using returned Data
                while($page = mysqli_fetch_array($page_set)){
                    echo "<li class=\"" ?>
                    <!-- Highlight selected page -->
                    <?php
                    if($page["id"] == $selected_page){
                        echo "text-[#00A86C]";
                    }
                    ?>
                    <?php 
                    
                    echo "<li class=\"mt-1\"><a href=\"index.php?page=".urlencode($page["id"])."\">> ".$page["menu_name"]."</a></li>";
                    }
                }
        }
    }

?>