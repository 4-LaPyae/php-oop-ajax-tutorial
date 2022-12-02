<?php
abstract class SubscriberObject{
  abstract  function update(); 
}
abstract class PublicsherObject{
    abstract function attach(SubscriberObject $observer);
    abstract function detach(SubscriberObject $observer);
    abstract function notify();
}

class TutorialPublicsher extends PublicsherObject{
    private $newTutorial = "";
    private $observers = [];
    public function attach(SubscriberObject $observer)
    {
        array_push($this->observers,$observer);
        
    }
    public function detach(SubscriberObject $observer)
    {
        foreach($this->observers as $key=>$obs){
            if($obs == $observer){
                unset($this->observers[$key]);
            }
        }
    }
    public function notify()
    {
      foreach($this->observers as $observer) {
        $observer->update();
      } 
    }
    public function addTutorial($newText){
        $this->newTutorial = $newText;
        $this->notify();
    }
}
class StudentSubseriber extends SubscriberObject{
    public function update()
    {
        echo "<h2>Welcome PHP!</h2><br>";
    }
}
$student_one = new StudentSubseriber;
$student_two = new StudentSubseriber;
$student_three = new StudentSubseriber;

$tutorial_channel = new TutorialPublicsher;
$tutorial_channel->attach($student_one);
$tutorial_channel->detach($student_one);
$tutorial_channel->attach($student_two);
$tutorial_channel->addTutorial("javascript");