public class PoisarNeighborhood {
    private final String name = "Poisar";
    private final String keyLandmark = "Poisar Gymkhana";

    public void displayStats() {
        System.out.println("Displaying profile for: " + name);
        System.out.println("---------------------------------");
        System.out.println("Parent Suburb: Kandivali (West)");
        System.out.println("Key Landmark:  " + keyLandmark);
        System.out.println("Vibe:          Quiet residential pockets near major transit lines.");
    }

    public static void main(String[] args) {
        new PoisarNeighborhood().displayStats();
    }
}
