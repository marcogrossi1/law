<?php
    interface IProfessor {
        public function Professor();
    }
    
    interface IEstudante {
        public function Estudante();
    }

    class Pessoa {
        private $identificacao;

        public function getId() {
            return $this->identificacao;
        }

        public function setId($id) {
            $this->identificacao = $id;
        }
    }

    class Professor extends Pessoa {
        private $salario;
        
        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($s) {
            $this->salario = $s;
        }

        public function Professor() {
            return 'professor';
        }
    }

    class Estudante extends Pessoa {
        private $graduacao;

        public function Estudante() {
            return 'estudante';
        }
    }

    class ProfessorEstudante {
        public function getDetalhesProfessorEstudante($professor, $estudante) {
            return "Eu sou ".$professor->Professor()." e ".$estudante->Estudante().". Meu ID é ".$professor->getId()." e eu ganho R$".$professor->getSalario().",00 por semana! ;)";
        }
    }

    $prof = new Professor();
    $prof->setId(1);
    $prof->setSalario(50000.00);
    
    $estud = new Estudante();
    $profEstud = new ProfessorEstudante();
    echo $profEstud->getDetalhesProfessorEstudante($prof, $estud);
?>
