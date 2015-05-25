<?php 
class note extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }
  public function create($new_note)
  {
    $query = "INSERT INTO notes (title,created_at) VALUES (?,?)";
    $values = array($new_note['title'], date('Y-m-d H:i:s'));
    return $this->db->query($query, $values);
  }

  public function destroy($note_id)
  {
    $query = "DELETE FROM notes WHERE id = '{$note_id}'";
    $this->db->query($query);
  }

  public function update($input)
  {
    $desc = $input["description"];
    $id = $input["id"];
    $this->db->query("UPDATE notes SET description ='$desc' WHERE id = '$id' ");
  }
}

// End model