/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Vue;

import DAO.DaoMariage;
import DAO.ConnectionBDD;
import DAO.DaoVip;
import java.sql.Connection;

/**
 *
 * @author Aurélien
 */
public class Main {
         public static void main(String[] args) {
        try {
                Connection laConnection = ConnectionBDD.ConnectionMySQl();
                /*AfficherVIP fen = new AfficherVIP(new DaoVip(laConnection));
                fen.setVisible(true);*/
                AfficherMariage fen2 = new AfficherMariage(new DaoMariage(laConnection));
                fen2.setVisible(true);
        } catch (Exception ex) {
            System.out.println("\n Probleme : " + ex.getMessage());
        }
    }
}
