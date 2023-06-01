import java.util.Scanner;

public class Calc {
    public static void main(String[] args) {
        Scanner escolha = new Scanner(System.in);

        // Valor configurado como zero inicialmente
        Numero numero1 = new Numero(0);
        Numero numero2 = new Numero(0);
        Numero resultado = new Numero(0);
        String loop = "S";

        while (loop.equals("S") || loop.equals("s")) {

            // Ler o valor para armazená-lo
            System.out.printf("%nDigite o valor 1: ");
            // recebendo o valor do teclado e armazenando.
            numero1.setValor(escolha.nextInt());

            System.out.printf("%nDigite o valor 2: ");
            numero2.setValor(escolha.nextInt());

            resultado.setValor(numero1.getNumero() + numero2.getNumero());

            System.out.printf("A soma de %d com %d é igual a %d", numero1.getNumero(), numero2.getNumero(),
                    resultado.getNumero());

            System.out.print("Deseja somar outro valor? ");
            loop = escolha.next();

            System.out.println("%n%n%n%n");
        }
    }
}