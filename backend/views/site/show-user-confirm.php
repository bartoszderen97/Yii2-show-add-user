Page: &nbsp; <?= $result->page ?></br>
Total pages: &nbsp; <?=  $result->total_pages ?></br>
Records per page: &nbsp; <?=  $result->per_page ?></br>
First record on page: </br>
&nbsp; - ID: &nbsp; <?=   $result->data[0]->id ?></br>
&nbsp; - First name: &nbsp; <?=  $result->data[0]->first_name ?></br>
&nbsp; - Last name: &nbsp; <?=  $result->data[0]->last_name ?></br>
&nbsp; - Avatar: </br><img src="<?= $result->data[0]->avatar ?>">