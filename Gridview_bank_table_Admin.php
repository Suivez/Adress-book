<tr>
    <th><?php echo $row["First_name"]?></th>
    <th><?php echo $row["Last_name"]?></th>
    <th><?php echo $row["Email"]?></th>
    <th><?php echo $row["Phone"]?></th>
    <th><?php echo $row["Location"]?></th>
    <th><?php echo $row["Room"]?></th>
    <th><?php echo $row["Job"]?></th>
    <th>
        <button class="btn btn-primary " onclick="Gridview_bank_table_Update('<?php echo $row['ID']?>','<?php echo $row['First_name']?>','<?php echo $row['Last_name']?>','<?php echo $row['Email']?>','<?php echo $row['Phone']?>','<?php echo $row['Location']?>','<?php echo $row['Room']?>','<?php echo $row['Job'] ?>','Update_bank_table')">Edytuj</button>
        <button class="btn btn-danger " onclick="Gridview_bank_table_Delete('<?php echo $row['ID']?>','Delete_bank_table')">Usuń</button>
    </th> 
</tr>

<script>
    function Gridview_bank_table_Update(ID,First_name,Last_name,Email,Phone,Location,Room,Job,IDModal)
    {   
        document.getElementById('update_ID').value = ID;
        document.getElementById('update_first_namebx').value = First_name;
        document.getElementById('update_last_namebx').value = Last_name;
        document.getElementById('update_emailbx').value = Email;
        document.getElementById('update_phonebx').value = Phone;
        document.getElementById('update_locationbx').value = Location;
        document.getElementById('update_roombx').value = Room;
        document.getElementById('update_jobbx').value = Job;
        showModal(IDModal);
    }
    function Gridview_bank_table_Delete(ID,IDModal)
    {   
        document.getElementById('delete_ID').value = ID;
        showModal(IDModal);  
    }
</script>