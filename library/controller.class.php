<?php

class Controller
{

  protected function view($viewName)
  {
    return new View($viewName);
  }


  protected function model($modelName)
  {
    require_once(ROOT . "/app/models/" . $modelName . ".model.php");
  }

  protected function template($viewName, $data = array())
  {
    $view = $this->view('template');
    $view->bind('viewName', $viewName);
    $view->bind('data', $data);

    return $view;
  }


  public function back()
  {
    echo "
    <script>
    history.go(-1)
    </script>
    ";
  }

  public function redirect($url = "")
  {
    header('location: ' . BASE_PATH . DS . $url);
  }

  protected function validate($data)
  {
    return htmlentities(trim(strip_tags($data)));
  }
}
