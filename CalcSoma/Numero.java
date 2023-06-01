// Objetos para receber os valores dos numeros
public class Numero {
    private int valor;

    // Recebe um valor
    public Numero(int valor) {
        // Recebe o valor do parâmetro valor
        this.valor = valor;
    }

    // Para 'setar'(configurar) o valor inicial e obter o valor desse numero
    public void setValor(int valor) {
        this.valor = valor;
    }

    // Método para obter o valor do numero
    public int getNumero() {
        return this.valor;
    }
}
