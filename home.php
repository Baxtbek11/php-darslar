<?php  include 'header.php' ?> 
  <h1>Talabalar baholari jadvali</h1>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Ism </th>
        <th>Familiya</th>
        <th>Yoshi</th>
        <th>Bahosi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($talabalar as $key =>$value) :?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $value['ism'] ?></td>
        <td><?php echo $value['familiya'] ?></td>
        <td><?php echo $value['yoshi'] ?></td>
        <td><?php echo $value['bahosi'] ?></td>
      </tr>
     <?php endforeach;?>
    </tbody>
  </table>
<?php  include 'footer.php' ?>