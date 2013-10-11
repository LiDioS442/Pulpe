/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package DAO;

/**
 *
 * @author Aurélien
 */
import java.sql.*;
import java.io.*;
import java.util.*;

public class ConnectionBDD {

    public static java.sql.Connection conn;

    public static Connection ConnectionMySQl() throws InstantiationException, IllegalAccessException, ClassNotFoundException, SQLException {
            // parametres de connexion
            String url = "jdbc:mysql://iutdoua-webetu.univ-lyon1.fr/p1102713";
            String login = "p1102713";
            String pass = "153029";

            // connexion
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            return java.sql.DriverManager.getConnection(url + "?user=" + login + "&password=" + pass);
    }

}