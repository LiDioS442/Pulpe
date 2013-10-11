/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Vue;

import Metier.Vip;
import DAO.DaoVip;
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
public class LeModeleVip extends AbstractTableModel {

    private DaoVip daoVip;
    private List<Vip> leConteneurVip;
    private String[] nomColonnes = {"ID", "Nom", "Prénom","Prenom 2", "Prénom 3", "Nationalit", "Date Naissance", "Lieu Naissance", "Sexe", "Métier","Marié"};

    public LeModeleVip(DaoVip leDaoVIP){ 
       try{
            daoVip = leDaoVIP;
            leConteneurVip = new ArrayList<>();
            daoVip.listerVip(leConteneurVip);
       } catch (SQLException ex) {
            Logger.getLogger(LeModeleVip.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
       
    @Override
    public int getRowCount() {
        return leConteneurVip.size();
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
        Vip e = leConteneurVip.get(rowIndex);
        switch (columnIndex) {
            case 0:
                return e.getIdVIP();
            case 1:
                return e.getNomVIP();
            case 2:
                return e.getPrenom1();
            case 3:
                return e.getPrenom2();
            case 4:
                return e.getPrenom3();
            case 5:
                return e.getNationalite();
            case 6:
                return e.getDatenaiss();
            case 7:
                return e.getLieunaiss();
            case 8:
                return e.getSexe();
            case 9:
                return e.getType();
            case 10:
                return e.getEtatmariage();
        }
        return null;
    }
}
