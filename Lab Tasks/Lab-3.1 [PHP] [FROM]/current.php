<html>
    <body>
        <form method="Post" action="handler.php">
        
             Name
            <input type="text"name="name"value=""> <br><br>

            Email
            <input type="text"name="email"value=""> <br><br>
            
            Dateof birth
            <input type="date"name="date_of_birth"value=""/><br><br>
            
            Gender<br>
            <input type="radio"name="gender"value="male">Male
            <input type="radio"name="gender"value="female">Female
            <input type="radio"name="gender"value="other">Other <br><br>
            
             Degree<br>
            <input type="checkbox"name="degree"value="">ssc
            <input type="checkbox"name="degree"value="">Hsc
            <input type="checkbox"name="degree"value="">BSc
            <input type="checkbox"name="degree"value="">MSc <br><br>
            <br>
            Blood group
            <select name="blood_group">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            
            <br>
            <br>
        </select> <br>
            
            <input type="submit" name="" value="submit"/>
        </form>
    </body>
</html>