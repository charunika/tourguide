/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package randomlist;
 import java.util.*;
/**
 *
 * @author CHARU
 */
public class List2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        /** List<List2> l = new ArrayList<>();*/
         
       for (int i = 1; i < 100; i++) {
        
        String n="xyz";
        Random r= new Random();
        String name=n+r.nextInt(i);
       
        System.out.println(name+i);
    }
        
    }



}
