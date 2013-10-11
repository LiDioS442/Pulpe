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
import Metier.Vip;

/**
 *
 * @author Aurélien
 */
public class DaoVip {

    private Connection laConnection;

    public DaoVip(Connection laConnection) {
        this.laConnection = laConnection;
    }

    public void listerVip(List<Vip> leConteneurVip) throws SQLException {
        // la requete
        String requete = "SELECT * FROM vip";
        // execution de la requete
        Statement stat = laConnection.createStatement();
        ResultSet rset = stat.executeQuery(requete);
        // affichage du résultat
        while (rset.next()) {
            Vip e;
            e = new Vip(rset.getInt(1), rset.getString(2), rset.getString(3), rset.getString(4), rset.getString(5), rset.getString(6), rset.getDate(7), rset.getString(8), rset.getString(9), rset.getString(10), rset.getBoolean(11));
            leConteneurVip.add(e);
        }
        rset.close();
    }
}
