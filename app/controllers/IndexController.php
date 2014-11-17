<?php

/* * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. 
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, 
 * TORT OR OTHERWISE, ARISING FROM OUT OF OR IN CONNECTION WITH THE 
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * */

/**
 * IndexController.php
 * 
 *
 * @author arg0070
 */
class IndexController extends BaseController {

    public function __construct() {
        //updated: prevents re-login.
        $this->beforeFilter('guest', ['only' => ['getLogin']]);
        $this->beforeFilter('auth', ['only' => ['getLogout']]);
    }

    public function getIndex() {
        $items = Item::orderBy('id', 'desc')->paginate(9);
        $items->getFactory()->setViewName('pagination::slider');
        $this->layout->title = 'Pirivi - Alquiler colaborativo';
        $this->layout->main = View::make('index')->nest('content', 'items',compact('items'));
    }

    public function getSearch() {
        $searchTerm = Input::get('s');
        $items = Item::whereRaw('match(title,content) against(? in boolean mode)', [$searchTerm])
                ->paginate(10);
        $items->getFactory()->setViewName('pagination::slider');
        $items->appends(['s' => $searchTerm]);
        $this->layout->with('title', 'Search: ' . $searchTerm);
        $this->layout->main = View::make('home')
                ->nest('content', 'index', ($items->isEmpty()) ? ['notFound' => true] : compact('posts'));
    }

    public function getLogin() {
        $this->layout->title = 'login';
        $this->layout->main = View::make('home')->nest('content', 'login');
    }

    public function postLogin() {
        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($credentials, $rules);
        if ($validator->passes()) {
            if (Auth::attempt($credentials)) {
                return Redirect::to('/');
            }
            return Redirect::back()->withInput()->with('failure', 'Usuario o contraaseña incorrecta');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/');
    }

}
