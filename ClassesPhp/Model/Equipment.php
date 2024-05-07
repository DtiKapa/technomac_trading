<?

class Equipment {
    private $id;
    private $name;
    private $brand;
    private $model;
    private $year;
    private $price;
    private $weight;
    private $ratedPower;
    private $standardBucketCapacity;
    private $standardBucketWidth;
    private $operationHydraulicPressure;
    private $maximumDiggingForce;
    private $gradeadility;
    private $pressureToTheGround;
    private $walkingSpeed;
    private $maximumHaulingForce;
    private $swingSpeedOfPlatform;
    private $description;
    private $image;

    // Métodos Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setRatedPower($ratedPower) {
        $this->ratedPower = $ratedPower;
    }

    public function setStandardBucketCapacity($standardBucketCapacity) {
        $this->standardBucketCapacity = $standardBucketCapacity;
    }

    public function setStandardBucketWidth($standardBucketWidth) {
        $this->standardBucketWidth = $standardBucketWidth;
    }

    public function setOperationHydraulicPressure($operationHydraulicPressure) {
        $this->operationHydraulicPressure = $operationHydraulicPressure;
    }

    public function setMaximumDiggingForce($maximumDiggingForce) {
        $this->maximumDiggingForce = $maximumDiggingForce;
    }

    public function setGradeadility($gradeadility) {
        $this->gradeadility = $gradeadility;
    }

    public function setPressureToTheGround($pressureToTheGround) {
        $this->pressureToTheGround = $pressureToTheGround;
    }

    public function setWalkingSpeed($walkingSpeed) {
        $this->walkingSpeed = $walkingSpeed;
    }

    public function setMaximumHaulingForce($maximumHaulingForce) {
        $this->maximumHaulingForce = $maximumHaulingForce;
    }

    public function setSwingSpeedOfPlatform($swingSpeedOfPlatform) {
        $this->swingSpeedOfPlatform = $swingSpeedOfPlatform;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    // Métodos Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getRatedPower() {
        return $this->ratedPower;
    }

    public function getStandardBucketCapacity() {
        return $this->standardBucketCapacity;
    }

    public function getStandardBucketWidth() {
        return $this->standardBucketWidth;
    }

    public function getOperationHydraulicPressure() {
        return $this->operationHydraulicPressure;
    }

    public function getMaximumDiggingForce() {
        return $this->maximumDiggingForce;
    }

    public function getGradeadility() {
        return $this->gradeadility;
    }

    public function getPressureToTheGround() {
        return $this->pressureToTheGround;
    }

    public function getWalkingSpeed() {
        return $this->walkingSpeed;
    }

    public function getMaximumHaulingForce() {
        return $this->maximumHaulingForce;
    }

    public function getSwingSpeedOfPlatform() {
        return $this->swingSpeedOfPlatform;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }
}
