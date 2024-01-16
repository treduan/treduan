class task {
    $description;
    $startDate;
    $dueDate;
    $category;
    $isFinished;

    function setDescription($desc) {
        $this->description = $desc;
    }
    function getDescription() {
        return $this->description;
    }
}