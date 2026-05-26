#include <iostream>
#include <string>
#include <vector>

struct Neighborhood {
    std::string name = "Poisar";
    std::string parent_suburb = "Kandivali";
    std::string district = "Mumbai Suburban";
    std::vector<std::string> transit = {"Western Railway", "Metro Line 2A"};
};

int main() {
    Neighborhood poisar;
    std::cout << "--- Neighborhood Record: " << poisar.name << " ---\n";
    std::cout << "Located in: " << poisar.parent_suburb << "\n";
    std::cout << "Transit:    ";
    for(const auto& mode : poisar.transit) std::cout << mode << " | ";
    std::cout << std::endl;
    return 0;
}
