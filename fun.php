<?php
    require_once('db.php');

    if (!isset($_SESSION['logedin']))
	{
		header('Location: index.php');
	}

    function show_class_names()
    {
        global $conn;
        $sql = "SELECT cname FROM class_name";
        foreach ($conn->query($sql) as $row) {
            echo("<p>". $row['cname'] . "</p>");
        }
        echo "
                </div>
            </div>
        </section>
        ";
    }

    function show_subjects()
    {
        global $conn;
        $sql = "SELECT sname FROM school_subject";
        foreach ($conn->query($sql) as $row) {
            echo("<p>". $row['sname'] . "</p>");
        }
        echo "
                </div>
            </div>
        </section>
        ";
    }

    function show_students()
    {
        global $conn;
        $sql = "SELECT fname, surname FROM student";
        foreach ($conn->query($sql) as $row) {
            echo("<p>". $row['fname'] . " " . $row['surname'] . "</p>");
        }
        echo "
                </div>
            </div>
        </section>
        ";
    }

    function show_teachers()
    {
        global $conn;
        $sql = "SELECT fname, surname FROM teacher";
        foreach ($conn->query($sql) as $row) {
            echo("<p>". $row['fname'] . " " . $row['surname'] . "</p>");
        }
        echo "
                </div>
            </div>
        </section>
        ";
    }

    function input_class_names()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='insert/insert_cname.php'>      
                <input class='input cname column is-3 mb-2' type='text' name='cname' placeholder='Class name'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function input_subjects()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='insert/insert_sub.php'>      
                <input class='input subject column is-3 mb-2' type='text' name='subject' placeholder='Subject'>
                <input class='input class_id column is-3 mb-2' type='text' name='class_id' placeholder='Class ID'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function input_students()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='insert/insert_stu.php'>      
                <input class='input student_n column is-3 mb-2' type='text' name='student_n' placeholder='Student Name'>
                <input class='input student_sn column is-3 mb-2' type='text' name='student_sn' placeholder='Student Surname'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function input_teachers()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='insert/insert_teach.php'>      
                <input class='input teacher_n column is-3 mb-2' type='text' name='teacher_n' placeholder='Teacher Name'>
                <input class='input teacher_sn column is-3 mb-2' type='text' name='teacher_sn' placeholder='Teacher Surname'>
                <input class='input teacher_age column is-3 mb-2' type='text' name='teacher_age' placeholder='Teacher Age'>
                <input class='input teacher_sub_name column is-3 mb-2' type='text' name='teacher_sub_name' placeholder='Teacher School Subject'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function show_ch_buttons()
    {
        echo("<div class=field mt-6>
            <a class='button mt-6 is-dark' href='?ch_log'>Change Login</a>
            <a class='button mt-6 is-dark' href='?ch_name'>Change Name</a>
            <a class='button mt-6 is-dark' href='?ch_sname'>Change Surname</a>
            <a class='button mt-6 is-dark' href='?ch_age'>Change Age</a>
            <a class='button mt-6 is-dark' href='?ch_pass'>Change Password</a>
            </div>
        ");
    }

    function change_login()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='ch_log.php'>
                <input class='input user_login column is-3 mb-2' type='text' name='user_login' placeholder='Current login'>
                <input class='input new_login column is-3 mb-2' type='text' name='new_login' placeholder='New login'>
                <input class='input c_pass column is-3 mb-2' type='password' name='c_pass' placeholder='Password'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function change_name()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='ch_name.php'>
                <input class='input user_login column is-3 mb-2' type='text' name='user_login' placeholder='Current login'>
                <input class='input new_name column is-3 mb-2' type='text' name='new_name' placeholder='Name'>
                <input class='input c_pass column is-3 mb-2' type='password' name='c_pass' placeholder='Password'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function change_surname()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='ch_surname.php'>
                <input class='input user_login column is-3 mb-2' type='text' name='user_login' placeholder='Current login'>
                <input class='input new_surname column is-3 mb-2' type='text' name='new_surname' placeholder='Surname'>
                <input class='input c_pass column is-3 mb-2' type='password' name='c_pass' placeholder='Password'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function change_age()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='ch_age.php'>
                <input class='input user_login column is-3 mb-2' type='text' name='user_login' placeholder='Current login'>
                <input class='input new_age column is-3 mb-2' type='text' name='new_age' placeholder='Age'>
                <input class='input c_pass column is-3 mb-2' type='password' name='c_pass' placeholder='Password'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

    function change_password()
    {
        echo("<div class='field mt-6'>
            <form method='post' action='ch_pass.php'>      
                <input class='input user_login column is-3 mb-2' type='text' name='user_login' placeholder='Login'>
                <input class='input c_pass column is-3 mb-2' type='password' name='c_pass' placeholder='Current Password'>
                <input class='input new_pass1 column is-3 mb-2' type='password' name='new_pass1' placeholder='New Password'>
                <input class='input new_pass2 column is-3 mb-2' type='password' name='new_pass2' placeholder='Confirm New Password'>
                <button class='button is-warning' name='sub' id='sub'>Add</button>
            </form>
            </div>
                    </div>
                </div>
            </section>
            "
        );
    }

?>