
package cadastro;

    import java.sql.*;
    import java.sql.ResultSet;
    import java.sql.Statement;

    public class conexao{

public Statement stm; // prepara e pesquisa no banco de dados
public ResultSet rs; // armazena os resultados de pesquisas passada para o statement
private String driver ="com.mysql.jdbc.Driver"; // identifica o serviço do banco de dados
private String caminho="jdbc:mysql://localhost:3306/systemcontrole"; // seta o local do banco de dados
private String usuario= "root";
private String senha= "";
public Connection conn;// responsavél pela conexão com o banco de dados

public void conecta(){   
    try{
         System.set.Property("jdbc.Drivers", driver);
    conn= DriverManeger.getConnection(caminho, usuario, senha);
    JOpitionPane.showMessageDialog(null,"Conectado com sucesso! Um forte abraço meu amigo Adair ;)");
    }catch(SQLException ex){
    Logger.getLogger(Conexao.class.getName()).log(Level.SEVERE, null, ex);
    JOpitionPane.showMessageDialog(null,"Ops, Error de conexão ;(");

    }
}

    }