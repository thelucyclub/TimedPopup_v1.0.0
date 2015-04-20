namespace TimedPopup\Task;

use pocketmine;

//Task.php
public function onRun($tick){
  switch($tick){
    case 1:
      $this->player->sendPopup(TextFormat::RED . "Welcome to SCPE!");
    case 2:
      $this->player->sendPopup(TextFormat::GOLD . "elcome to SCPE! W");
    case 3:
      $this->player->sendPopup(TextFormat::YELLOW . "lcome to SCPE! We");
    case 4:
      $this->player->sendPopup(TextFormat::GREEN . "come to SCPE! Wel");
    case 5:
      $this->player->sendPopup(TextFormat::BLUE . "ome to SCPE! Welc");
    case 6:
      $this->player->sendPopup(TextFormat::LIGHT_PURPLE . "me to SCPE! Welco");
    case 7:
      $this->player->sendPopup(TextFormat::RED . "e to SCPE! Welcom");
    case 8:
      $this->player->sendPopup(TextFormat::GOLD . "to SCPE! Welcome");
    case 9:
      $this->player->sendPopup(TextFormat::YELLOW . "o SCPE! Welcome t");
    case 10:
      $this->player->sendPopup(TextFormat::GREEN . " SCPE! Welcome to");
    case 11:
      $this->player->sendPopup(TextFormat::BLUE . "SCPE! Welcome to ");
    case 12:
      $this->player->sendPopup(TextFormat::LIGHT_PURPLE . "CPE! Welcome to S");
    case 13:
      $this->player->sendPopup(TextFormat::RED . "PE! Welcome to SC");
    case 14:
      $this->player->sendPopup(TextFormat::GOLD . "E! Welcome to SCP");
    case 15:
      $this->player->sendPopup(TextFormat::YELLOW . "! Welcome to SCPE");
    case 16:
      $this->player->sendPopup(TextFormat::GREEN . " Welcome to SCPE!");
    case 17:
      $this->player->sendPopup("");
    case 18:
      $this->player->sendPopup("");

  }
}
