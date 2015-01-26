class Queue
  def empty
    if @item
      false
    else
      true
    end
  end
  def push(item)
    @item = item
  end
  def pop()
    @item
  end
end

