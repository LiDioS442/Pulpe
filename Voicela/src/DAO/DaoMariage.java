/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import Metier.ListMariage;

/**
 *
 * @author Aurélien
 */
public class DaoMariage {

    private Connection laConnection;

    public DaoMariage(Connection laConnection) {
        this.laConnection = laConnection;
    }

    public void listerMariage(List<ListMariage> leConteneurMariage) throws SQLException {
        // la requete
        String requete = "SELECT vip1.nomVIP AS Nom, vip1.prenom1 AS Prenom, vip2.nomVIP AS NomConjoint, vip2.prenom1 AS PrenomConjoint, mariage1.lieuMariage, mariage1.dateMariage\n"
                + "FROM mariage mariage1,mariage mariage2, vip vip1, vip vip2\n"
                + "WHERE vip1.idVIP = mariage1.idVIP\n"
                + "AND vip2.idVIP = mariage2.idConjoint\n"
                + "AND mariage1.dateMariage = mariage2.dateMariage\n"
                + "GROUP BY mariage1.dateMariage;";
        // execution de la requete
        Statement stat = laConnection.createStatement();
        ResultSet rset = stat.executeQuery(requete);
        // affichage du résultat
        while (rset.next()) {
            ListMariage e;
            e = new ListMariage(rset.getString(1), rset.getString(2), rset.getString(3),rset.getString(4),rset.getString(5), rset.getDate(6));
            leConteneurMariage.add(e);
        }
        rset.close();
    }
}
