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

       public static void main(String[] args) {
        
       
         for (int i = 1; i < 10; i++) {
       
        String n="";
        Random r= new Random();
        char[] x = ("" + r.nextInt(i)).toCharArray();
         
        int age = r.nextInt(50);
        int val =r.nextInt(i);
       String name;
       name = n+ (x+Integer.toString(val)) ;
        System.out.println(name+","+age);
        
    }
        
    }

}


}
