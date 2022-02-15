package test;
import java.util.Scanner;
public class Test2 {

	


	    private static Scanner scanner = new Scanner(System.in);

	    public static void main(String args[]) {

	        // Demander une valeur � l'utilisateur
	        System.out.print("Entrez un nombre entier:");
	        int number = scanner.nextInt();

	        // Premi�rement, on v�rifie si le nombre est z�ro, car
	        // dans ce cas le test de parit� n'est pas n�cessaire
	        if (number == 0) {
	            System.out.println("Le nombre est z�ro (et il est pair)");
	        } else {
	            // S'il n'est pas nul, voyons quel est son signe
	            if (number < 0) {
	                //Note: System.out.print ne commence pas de nouvelle ligne
	                System.out.print("Le nombre est n�gatif ");
	            } else {
	                System.out.print("Le nombre est positif ");
	            }

	            // Teste la parit�: si le reste de la division par deux est z�ro
	            // alors le nombre est pair
	            int reste = number % 2;
	            if (reste == 0) {
	                System.out.println("et pair");
	            } else {
	                System.out.println("et impair");
	            }
	        }
	    }
	}

