<html>
    <head>
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    <body>

        <form action='team_assignment.php' method='POST'>
            <label>Name:
                <input type='text' name='name'/>
            </label><br>
            <label>Email:
                <input type='text' name='email'/>
            </label><br>
            <label>Major:
                <label>Computer Science<input type='radio'name='major' value='Computer Science'></label><br>
                <label>Web Design<input type='radio'name='major' value='Web Design  Development'></label><br>
                <label>Computer Engineering<input type='radio'name='major' value='Computer Engineering'></label><br>
                <label>Computer Information Systems<input type='radio'name='major' value='Computer Information Technology'></label><br>
            </label>
            <label>Comments:
                <textarea name='comments'></textarea>
            </label><br>
            <label> North America
                <input type='checkbox' name='continent[]' value='North America'/>
            </label><br>
            <label> South America
                <input type='checkbox' name='continent[]' value='South America'/>
            </label><br>
            <label> Europe
                <input type='checkbox' name='continent[]' value='Europe'/>
            </label><br>
            <label> Asia
                    <input type='checkbox' name='continent[]' value='Asia'/>
            </label><br>
            <label> Africa
                <input type='checkbox' name='continent[]' value='Africa'/>
            </label><br>
            <label> Antaritica
                <input type='checkbox' name='continent[]' value='Antartica'/>
            </label><br>
            <label> Australia
                <input type='checkbox' name='continent[]' value='Australia'/>
            </label><br>
            <input type='submit'/>
        </form>

        <?php
            if(empty($_POST)){
                print "form";
            }else{
                ?>
                <p>Your name is <?= $_POST['name']?></p>
                <p>Your email is <a href=mailto:"<?= $_POST['email']?>"> <?= $_POST['email']?></a></p>
                <p>Your major is <?= $_POST['major']?> </p>
                <p>Your comments are <?= $_POST['comments']?> </p>
                <p>continents <?= implode(', ', $_POST['continent']) ?> </p>
        <?php
            }
        ?>

    </body>
</html>
