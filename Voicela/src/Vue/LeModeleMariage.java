/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Vue;

import DAO.DaoMariage;
import Metier.ListMariage;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author alain.pillot
 */
public class LeModeleMariage extends AbstractTableModel {

    private DaoMariage daoMariage;
    private List<ListMariage> leConteneurMariage;
    private String[] nomColonnes = {"Nom", "Prénom", "Nom Conjoint","Prénom Conjoint", "Lieu Mariage", "Date Mariage"};

    public LeModeleMariage(DaoMariage ledaoMariage){ 
       try{
            daoMariage = ledaoMariage;
            leConteneurMariage = new ArrayList<>();
            daoMariage.listerMariage(leConteneurMariage);
       } catch (SQLException ex) {
            Logger.getLogger(LeModeleVip.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
       
    @Override
    public int getRowCount() {
        return leConteneurMariage.size();
    }

    @Override
    public int getColumnCount() {
        return nomColonnes.length;
    }
    
    @Override
    public String getColumnName(int col) {
        return col >= 0 ? nomColonnes[col] : null;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        ListMariage e = leConteneurMariage.get(rowIndex);
        switch (columnIndex) {
            case 0:
                return e.getNom();
            case 1:
                return e.getPrenom();
            case 2:
                return e.getNomConjoint();
            case 3:
                return e.getPrenomConjoint();
            case 4:
                return e.getLieuMariage();
            case 5:
                return e.getDateMariage();
            }
        return null;
    }
}
