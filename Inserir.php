//Inseir val. X na arvore//

X = 30;
void inseri (R NodeABB, x int)
{
if (R == null){
    NodeABB P;
    P = NewNode;
    P.info = X;
    P.Esq = Null;
    P.Dir = Null;
    R = P;
    return true;
}   
  else if (X == R.info){
    return false;
} else if (R.info > X ){
    (inseri(R.Esq, X));
    return true
} else (
   ( R.info > X ){
    return (inseri(R.Dir, X));
    }
}